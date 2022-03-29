
from abc import ABC


class Publisher(ABC):
    _subscribers = []

    def attach(self, subscriber):
        self._subscribers.append(subscriber)

    def detach(self, subscriber):
        self._subscribers.remove(subscriber)

    def notify(self):
        for subscriber in self._subscribers:
            subscriber.update(self)
    
    @property
    def object(self):
        return self._object

    @object.setter
    def object(self, object):
        self._object = object

