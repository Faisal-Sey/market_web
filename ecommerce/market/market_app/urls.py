from django.urls import path
from . import views
from django.conf import settings
from django.conf.urls.static import static

urlpatterns = [
    path('', views.index, name="home"),
    path('register/', views.signup, name="register"),
    path('login/', views.login_view, name="login"),
    path('logout/', views.logout_user, name="logout"),
    path('account/', views.account, name="account"),
]