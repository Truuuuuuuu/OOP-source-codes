class Milktea:

    def __init__(self,flavor,size,sugar_level,with_pearl):
        self.flavor = flavor
        self.size = size
        self.sugar_level = sugar_level
        self.with_pearl = with_pearl

    def receive(self):
        print(f'You received your {self.flavor} milktea order')