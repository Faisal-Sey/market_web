from django.shortcuts import render, redirect
from .forms import SignUpForm, LoginForm
from .models import SignupModel
from django.contrib.auth import login, logout, authenticate
from django.contrib.auth.models import User
from datetime import datetime
from django.contrib import messages


# Create your views here.


def index(request):
    return render(request, 'index.html')


def signup(request):
    if request.method == "GET":
        form = SignUpForm()
        context = {'form': form}
        return render(request, 'accounts/register.html', context)

    if request.method == "POST":
        form = SignUpForm(request.POST)
        context = {'form': form}
        if form.is_valid():
            username = request.POST.get('username')
            email = request.POST.get('email')
            password = request.POST.get('password1')
            user = User.objects.create_user(username=username, email=email, password=password)
            user.save()
            login(request, user)

            new_signup = SignupModel(
                user=user,
                First_name=request.POST.get('First_name'),
                Last_name=request.POST.get('Last_name'),
                Email=email,
                Phone=request.POST.get('phone'),
                Address_1=request.POST.get('address1'),
                Address_2=request.POST.get('address2'),
                City=request.POST.get('City'),
                Country=request.POST.get('country_id'),
                Post_Code=request.POST.get('Post_code'),
                Region=request.POST.get('zone_id'),
                News_letter=request.POST.get('newsletter'),
                slug=request.POST.get('username'),
                created=datetime.now()
            )

            new_signup.save()

            return redirect('home')
        else:
            return render(request, "accounts/register.html", context)


def login_view(request):
    if request.method == "GET":
        form = LoginForm()
        context = {'form': form}
        return render(request, "accounts/login.html", context)

    if request.method == "POST":
        form = LoginForm(request.POST)
        context = {'form': form}
        if form.is_valid:
            username = request.POST.get('username')
            password = request.POST.get('password')

            user = authenticate(username=username, password=password)
            if user is not None:
                login(request, user)
                return redirect('home')

            else:
                messages.info(request, "Email or Password Incorrect")
                return render(request, 'accounts/login.html', context=context)
        else:
            return render(request, 'accounts/login.html', context=context)


def logout_user(request):
    logout(request)
    return redirect('home')


def account(request):
    return render(request, "my-account.html")