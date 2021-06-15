from django.db import models
from django.conf import settings

# Create your models here.


class SignupModel(models.Model):
    user = models.ForeignKey(settings.AUTH_USER_MODEL, on_delete=models.CASCADE, blank=True, null=True)
    First_name = models.CharField(max_length=100)
    Last_name = models.CharField(max_length=100, blank=True, null=True)
    Email = models.CharField(max_length=255)
    Phone = models.CharField(max_length=70)
    Address_1 = models.CharField(max_length=255)
    Address_2 = models.CharField(max_length=255, blank=True, null=True)
    City = models.CharField(max_length=100)
    Post_Code = models.CharField(max_length=100, blank=True, null=True)
    Country = models.CharField(max_length=100)
    Region = models.CharField(max_length=100)
    News_letter = models.CharField(max_length=10)
    slug = models.CharField(max_length=50)
    created = models.DateTimeField(auto_now_add=True)

    objects = models.Manager()

    def __str__(self):
        return self.First_name


