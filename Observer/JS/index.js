class Subject
{
    observers = [];

    subscribe = function(observer) {
        this.observers.push(observer);
    }

    unsubscribe = function (observer) {
        this.observers = this.observers.filter((o) => o !== observer);
    }

    fire = function () {
        console.log('Allumez le feuuuu !! Yeah !!');
        this.observers.forEach((o) => o());
    }
}

const mailer = () => console.log('mail sended');
const sms = () => console.log('sms sended');

const s = new Subject();

s.subscribe(mailer);
s.subscribe(sms);

s.fire();