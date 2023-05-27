class student:
    def __init__(self, nom, prenom, email, tele):
        self.nom = nom
        self.prenom = prenom
        self.email = email
        self.tele = tele


class formation:
    def __init__(self):
        self.students = []

    def ajouter(self, nom, prenom, email, tele):
        stodant = student(nom, prenom, email, tele)
        self.students.append(stodant)
        print(f'student {nom} {prenom} is added sucefully')

    def modifier(self, index, nom, prenom, email, tele):
        nomii = self.students[index].nom
        self.students[index].nom = nom
        self.students[index].prenom = prenom
        self.students[index].email = email
        self.students[index].tele = tele
        print(f'the {nomii} student is modified succefully')

    def suprime(self, index):
        nomii = self.students[index].nom
        del self.students[index]
        print(f'{nomii} was deleted suceffuly')

    def afficher(self):
        if len(self.students) == 0:
            print("there is no students to show")
        else:
            print("list of students")
            for i, studa in enumerate(self.students):
                print(
                    f'{i+1}: {studa.nom}, {studa.prenom}, {studa.email}, {studa.tele}')


fonki = formation()
fonki.ajouter("bilal", "atrgouti", "btrgouti@gmail.com", "5253125")
fonki.ajouter("zakariya", "mhamdi", "mhamdi@gmail.com", "454524")
fonki.modifier(1, "khalid", "youssfi", "nfwuf", "faijf")
fonki.suprime(1)
fonki.afficher()
