Correction contrôle ordonnancement

| Taches | Durée | Pred |
|:------:|:-----:|:----:|
|   A    |   1   |  /   |
|   B    |   5   |  A   |
|   C    |   1   | A,D  |
|   D    |   3   |  /   |
|   E    |   1   |  D   |
|   F    |   4   | C,E  |
|   G    |   1   | B,F  |


<u>Niveu de chaue sommet</u>

| Niveau | 0   | 1     | 2   | 3   |
| ------ | --- | ----- | --- | --- |
| Tache  | A,D | B,C,E | F   | G   |

<u>Tableau des successeurs</u>

| Tache | Sucesseur |
| ----- | --------- |
| A     | B,C       | 
| B     | G         |
| C     | F         |
| D     | C,E       |
| E     | F         |
| F     | G         |
| G     | ❌        |


![](MATH/ordonancement_et_methode_mpm/Pasted%20image%2020231005171727.png)