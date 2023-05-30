class voiture:
    def __init__(self, nom, prix):
        self.nom = nom
        self.prix = prix

    def get_nom(self):
        return self.nom

    def get_prix(self):
        return self.prix

    def set_nom(self, nom):
        self.nom = nom

    def set_prix(self, prix):
        self.prix = prix


class magasin:
    def __init__(self):
        self.cars = []

    def ajouter(self, nom, prix):
        car = voiture(nom, prix)
        self.cars.append(car)
        print(f'car {nom} est ete ajouter success')

    def modifier(self, index, nom, prix):
        n = self.cars[index].nom
        self.cars[index].nom = nom
        self.cars[index].prix = prix
        print(f'the car {n} is modified')

    def suprime(self, index):
        na = self.cars[index].nom
        del self.cars[index]
        print(f'the car {na} is deleted')

    def afficher(self):
        if len(self.cars) == 0:
            print('there is no cars to show')
        else:
            print("the list of cars")
            for i, car in enumerate(self.cars):
                print(f'{i+1}: {car.nom} prix {car.prix}')


ran = magasin()
ran.ajouter("meredes", "2000")
ran.ajouter("honda", "563")
ran.ajouter("fiat", "97")
ran.modifier(1, "clio2", 4000)
ran.suprime(0)
ran.afficher()


class regtangle:
    def __init__(self, lang, larg):
        self.lang = lang
        self.larg = larg

    def sum(self):
        print(f'sum is {self.larg + self.lang}')

    def darb(self):
        print(f'sum is {self.larg * self.lang}')


a = int(input("entre a: "))
b = int(input("entre b: "))
res = regtangle(a, b)
res.sum()
