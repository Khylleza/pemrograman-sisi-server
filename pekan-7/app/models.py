from django.db import models
from django.contrib.auth.models import AbstractUser

class User(AbstractUser):
    pass  # Gunakan user default

class Course(models.Model):
    title = models.CharField(max_length=255)
    creator = models.ForeignKey(User, on_delete=models.CASCADE, related_name='created_courses')
    participants = models.ManyToManyField(User, related_name='enrolled_courses', blank=True)

    def __str__(self):
        return self.title
