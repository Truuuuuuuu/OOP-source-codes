# Multiple Inheritance =  inherit from more than one parent class
#                           ex:  C(A,B)

#Multilevel Inheritance = Inherit from a parent which inherits from another parent 


class Animal: #Grandparent
    def __init__(self,name):
        self.name = name

    def eat(self):
        print(f"{self.name} is eating")

    def sleep(self):
        print(f'{self.name} is sleeping')
class Prey(Animal): 
    def flee(self):
        print(f'{self.name} is fleeing')

class Predator(Animal):
    def hunt(self):
        print(f"{self.name} is hunting")

class Rabbit(Prey):
    pass

class Hawk(Predator):
    pass

class Fish(Prey, Predator): #Multiple Inheritance (2 Parent)
    pass

rabbit = Rabbit("Whitey")
hawk = Hawk("Skye")
fish = Fish("Nemo")

fish.flee() #both prey and predator
rabbit.flee() #prey
hawk.hunt() #predator

rabbit.eat()
fish.sleep()

