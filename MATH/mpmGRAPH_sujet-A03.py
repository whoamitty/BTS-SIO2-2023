from grapheMPM import GrapheMPM

# dico des prédecesseurs
p = {"A": "", "B": "", "C":"A", "D": "A", "E":"AD",
     "F":"C", "G": "DE", "H":"EG", "I":"H", "J":"FI"}


# dico des pondérations
w = {"A":4, "B":2, "C":2, "D":1, "E":2, "F":5, "G":3, "H":3, "I":3, "J":4}
G = GrapheMPM(pred=p, pond=w, marges=False) # par défaut marges=False


G.earliestdate()
#G.makeGraphviz()
#G.gv.render("ex-ed-nomarge")

G.latestdate()
G.makeGraphviz()
G.gv.render("ex-full-nomarge")
# G.gv.format = "svg"
# G.gv.render("ex-ed-nomarge")
