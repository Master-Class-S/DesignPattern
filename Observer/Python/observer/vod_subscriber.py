
from observer.movie import Movie
from observer.subscriber import Subscriber


class VodSubscriber(Subscriber):
    def update(self, publisher):
        movie = publisher._object
        if isinstance(movie, Movie):
            print('[Canal VOD] Price has been updated {} | {} €'.format(movie._title, movie._price))