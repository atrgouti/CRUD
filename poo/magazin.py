class voiture:
    def __init__(self, type, prix, date):
        self.type = type
        self.prix = prix
        self.date = date

    def get_type(self):
        return self.type

    def get_prix(self):
        return self.prix

    def get_date(self):
        return self.date

    def set_type(self, type):
        self.type = type

    def set_prix(self, prix):
        self.prix = prix

    def set_date(self, date):
        self.date = date


class magazine:
    def __init__(self):
        self.cars = []

    def ajouter(self, type, prix, date):
        type = str(input("entre type de voiture: "))
        prix = int(input("entre prix de voiture: "))
        date = int(input("entre date de voiture: "))
        car = voiture(type, prix, date)
        self.cars.append(car)
        print(f'car {type} est bien ajouter: ')

    def modifier(self):
        print("enter the index of the car that you want to edit: ")
        index = int(input(""))
        nom = self.cars[index].type
        self.cars[index].type = input("enter the new car type: ")
        self.cars[index].prix = int(input("enter the new car prix: "))
        self.cars[index].date = int(input("enter the new car date: "))
        print(f'car {nom} is changed succefully')

    def suprime(self):
        index = int(input("entre le index of the car that you want to delete"))
        nom = self.cars[index].type
        del self.cars[index]
        print(f'car {nom} is deleted succefuly')

    def affiche(self):
        if len(self.cars) == 0:
            print("there is no cars now")
        else:
            print("the cars are:")
            for i, car in enumerate(self.cars):
                print(f'{i+1} {car.type}, {car.prix}, {car.date}')


run = magazine()
run.ajouter("mercedes", '999', '2009')
run.affiche()
