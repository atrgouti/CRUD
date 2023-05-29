class Rectongle:
    def __init__(self, long, larg):
        self.long = long
        self.larg = larg

    def get_long(self):
        return self.long

    def get_larg(self):
        return self.larg

    def set_long(self, long):
        self.long = long

    def set_larg(self, larg):
        self.larg = larg

    def __str__(self):
        return f'larg: {self.larg},long:{self.long}'

    def surface(self):
        print(self.long * self.larg)

    def permitre(self):
        print((self.long + self.larg) * 2)


a = int(input("entre le long"))
b = int(input("entre le larg"))
result = Rectongle(a, b)
result.surface()
result.permitre()
