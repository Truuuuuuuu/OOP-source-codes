# Inheritance =  Allows a class to inherit attributes and methods from anther class
#                Helps with code reusability and extensibility
#                ex: class Child(Parent)


class Animal: #PARENT
    def __init__(self,name):
        self.name = name
        self.is_alive = True
    
    def eat(self):
        print(f"{self.name} is eating")
    
    def sleep(self):
        print(f"{self.name} is sleeping")

class Dog(Animal): #CHILD
    def speak(self):
        print('Barkkk')

class Cat(Animal): #CHILD
    def speak(self):
        print('Meoww')

class Chicken(Animal): #CHILD
    def speak(self):
        print('Hey bro')

dog = Dog("Blacky")
cat = Cat("Mingming")
chicken = Chicken("chickchick")

chicken.speak()
chicken.sleep()
