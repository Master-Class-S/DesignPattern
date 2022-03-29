from observer.publisher import Publisher


class Movie(Publisher):
    def __init__(self, title, price):
        self._title = title
        self._price = price
    
    @property
    def price(self):
        return self._price

    @price.setter
    def price(self, price):
        if price > 0:
            self._price = price
            self._object = self
            self.notify()