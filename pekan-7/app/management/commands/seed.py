from django.core.management.base import BaseCommand
from faker import Faker
from app.models import User, Course
import random

fake = Faker()

class Command(BaseCommand):
    help = 'Seed the database with dummy users and courses'

    def handle(self, *args, **kwargs):
        self.stdout.write("Seeding data...")

        # Clear existing data (optional)
        Course.objects.all().delete()
        User.objects.exclude(is_superuser=True).delete()

        # Create 10 users
        users = []
        for _ in range(10):
            user = User.objects.create_user(
                username=fake.user_name(),
                email=fake.email(),
                password='password123'
            )
            users.append(user)

        # Create 5 courses
        for _ in range(5):
            creator = random.choice(users)
            course = Course.objects.create(
                title=fake.sentence(nb_words=3),
                creator=creator
            )
            # Add 2–5 participants randomly
            course.participants.set(random.sample(users, k=random.randint(2, 5)))

        self.stdout.write(self.style.SUCCESS("Done seeding!"))
