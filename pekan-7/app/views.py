from django.shortcuts import render
from django.db.models import Count, Avg
from .models import User

def statistics_view(request):
    users_with_courses_count = User.objects.filter(created_courses__isnull=False).distinct().count()
    users_without_courses_count = User.objects.filter(created_courses__isnull=True).count()
    average_courses_per_user = User.objects.annotate(num_courses=Count('enrolled_courses'))\
                                           .aggregate(avg=Avg('num_courses'))['avg'] or 0

    user_most_courses = User.objects.annotate(num_courses=Count('enrolled_courses'))\
                                    .order_by('-num_courses')\
                                    .first()

    users_not_enrolled = User.objects.filter(enrolled_courses__isnull=True)

    context = {
        'users_with_courses_count': users_with_courses_count,
        'users_without_courses_count': users_without_courses_count,
        'average_courses_per_user': average_courses_per_user,
        'user_most_courses': user_most_courses,
        'users_not_enrolled': users_not_enrolled,
    }
    return render(request, 'stats.html', context)
