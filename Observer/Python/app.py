
from observer.movie import Movie
from observer.store_subscriber import StoreSubscriber
from observer.vod_subscriber import VodSubscriber

movie = Movie("Batman", 55)
vod = VodSubscriber()
store = StoreSubscriber()
# subscribe
movie.attach(vod) 
# subscribe
movie.attach(store)
# unsubscribe
movie.detach(vod)
movie.price = 80

