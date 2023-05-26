class stagiaire:
    def __init__(self, nom, prenom, email, tel):
        self.nom = nom
        self.prenom = prenom
        self.email = email
        self.tel = tel


class centerFormation:
    def __init__(self):
        self.stagiaires = []

    def ajouter_stagiare(self, nom, prenom, email, tel):
        stagiairo = stagiaire(nom, prenom, email, tel)
        self.stagiaires.append(stagiairo)
        print(f'stagiare {prenom} added succefully')

    def afficher(self):
        if len(self.stagiaires) == 0:
            print(f'the is no stagiares')
        else:
            print("la list des stagiares")
            for i, stagiar in enumerate(self.stagiaires):
                print(
                    f' {i+1}, {stagiar.nom}, {stagiar.prenom}, {stagiar.email}, {stagiar.tel}')


center = centerFormation()
center.ajouter_stagiare("bilal", "yassin", "btrgouti@gmail.com", "062374829")
center.afficher()
