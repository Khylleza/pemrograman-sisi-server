from django.urls import path
from .views import statistics_view

urlpatterns = [
    path('statistik/', statistics_view, name='statistik'),
]
