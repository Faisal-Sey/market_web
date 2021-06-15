from django import forms
from django.contrib.auth.forms import UserCreationForm
from django.contrib.auth.models import User


class SignUpForm(UserCreationForm):
    username = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'Username',
        'name': 'username',
        'id': 'input-username',
        'class': "form-control"
    }))

    First_name = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'First Name',
        'name': 'firstname',
        'id': 'input-firstname',
        'class': "form-control"
    }))

    Last_name = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'Last Name',
        'name': 'lastname',
        'id': 'input-lastname',
        'class': "form-control"
    }))

    password1 = forms.CharField(required=True, widget=forms.PasswordInput(attrs={
        'placeholder': 'Password',
        'name': 'password',
        'id': 'input-firstname',
        'class': "form-control"
    }))

    password2 = forms.CharField(required=True, widget=forms.PasswordInput(attrs={
        'placeholder': 'Confirm Password',
        'name': 'confirm',
        'id': 'input-firstname',
        'class': "form-control"
    }))

    email = forms.EmailField(required=True, widget=forms.EmailInput(attrs={
        'placeholder': 'E-mail',
        'name': 'email',
        'id': 'input-email',
        'class': "form-control"
    }))

    phone = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'Phone',
        'name': 'phone',
        'id': 'input-telephone',
        'class': "form-control"
    }))

    address1 = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'Address 1',
        'name': 'address_1',
        'id': 'input-address-1',
        'class': "form-control"
    }))

    address2 = forms.CharField(required=False, widget=forms.TextInput(attrs={
        'placeholder': 'Address 2',
        'name': 'address_2',
        'id': 'input-address-2',
        'class': "form-control"
    }))

    Post_code = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'Post Code',
        'name': 'postcode',
        'id': 'input-postcode',
        'class': "form-control"
    }))

    City = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'placeholder': 'City',
        'name': 'city',
        'id': 'input-city',
        'class': "form-control"
    }))


    class Meta:
        model = User
        fields = ['username', 'email', 'password1', 'password2']


class LoginForm(forms.Form):
    username = forms.CharField(required=True, widget=forms.TextInput(attrs={
        'class': 'form-control',
        'id': 'input-username'
    }))

    password = forms.CharField(required=True, widget=forms.PasswordInput(attrs={
        'class': 'form-control',
        'id': 'input-password'
    }))