from grapheMPM import GrapheMPM

# dico des prédecesseurs
p = {"A": "", "B": "A", "C":"B", "D": "", "E":"D",
     "F":"BE", "G": "CF", "H":"G"}


# dico des pondérations
w = {"A":2, "B":4, "C":1, "D":10, "E":1, "F":3, "G":1, "H":7}
G = GrapheMPM(pred=p, pond=w, marges=False) # par défaut marges=False


G.earliestdate()
#G.makeGraphviz()
#G.gv.render("ex-ed-nomarge")

G.latestdate()
G.makeGraphviz()
G.gv.render("ex-full-nomarge")

# G.gv.format = "svg"
# G.gv.render("ex-ed-nomarge")
