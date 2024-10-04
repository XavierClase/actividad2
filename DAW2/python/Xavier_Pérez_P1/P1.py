import random

def endivina_num():
    random_num = random.randint(1, 10)
    adivinat = False
    intents = 0
    print("\n --- ENDIVINA EL NOMBRE DEL 1 AL 10 --- \n")
    while not adivinat and intents < 3:
        intent = int(input("Adivina: "))
        if intent > 0 and intent <= 10:
            if intent == random_num:
                adivinat = True
                print("Felicitats! Has endevinat el nombre.")
            else:
                if intent > random_num:
                    print("El nombre ocult és menor que aquest.")
                else:
                    print("El nombre ocult és major que aquest.")
                intents += 1
        else:
            print("Caràcter no vàlid!!")

    if intents == 3:
        print(f"Ohhhh, sense més intents. El nombre era: {random_num}")

def pedra_paper_tisores():
    opcions = ["pedra", "paper", "tissores"]
    punts_maquina = 0
    punts_jugador = 0

    print("\n ---PEDRA PAPER TISSORES--- \n")
    
    while punts_maquina < 3 and punts_jugador < 3:
        eleccio = input("\nIntrodueix pedra, paper o tissores: ")
        opcio_maquina = random.randint(0, 2)
        maquina = opcions[opcio_maquina]

        if eleccio == "pedra":
            if maquina == "pedra":
                print("EMPAT")
            elif maquina == "tissores":
                print("GUANYES!!!")
                punts_jugador += 1
            elif maquina == "paper":
                print("NOO PERDS!!!")
                punts_maquina += 1
        
        elif eleccio == "paper":
            if maquina == "paper":
                print("EMPAT")
            elif maquina == "pedra":
                print("GUANYES!!!")
                punts_jugador += 1
            elif maquina == "tissores":
                print("NOO PERDS!!!")
                punts_maquina += 1

        elif eleccio == "tissores":
            if maquina == "tissores":
                print("EMPAT")
            elif maquina == "paper":
                print("GUANYES!!!")
                punts_jugador += 1
            elif maquina == "pedra":
                print("NOO PERDS!!!")
                punts_maquina += 1
                
        else:
            print("Introdueix un valor vàlid!!")
            continue

        print(f"Jugador: {punts_jugador} - Màquina: {punts_maquina}")

    if punts_jugador == 3:
        print("Felicitats! Has guanyat el joc!")
    else:
        print("La màquina ha guanyat. Millor sort la pròxima vegada!")


def penjat():

    with open("paraules.txt", "r", encoding="utf-8") as file:

        paraules = [line.strip() for line in file]

    paraula = paraules[random.randint(0, 29)].lower()
    
    llarg_paraula = len(paraula)

    

    intents_maxims = llarg_paraula * 2
    intents = 0
    adivinada = False

    print("\n ---PENJAT--- \n")
    print("")
    coincideix = ["_"] * llarg_paraula
    while not adivinada and intents < intents_maxims:
        print("PARAULA:")
        print(" ".join(coincideix))  
        print(f"Et queden {intents_maxims - intents} intents")

        try:
            opcio = int(input("\n(1) Endevinar paraula (2) Provar lletra: "))
        except ValueError:
            print("Opció no vàlida. Introdueix 1 o 2.")
            continue

        if opcio == 1:

            paraula_intent = input("Prova paraula: ")
            
            if paraula_intent == paraula:
                print("FELICITATS!!!!  PARAULA ENDEVINADA")
                print(paraula)
                adivinada = True
            else:
                print("Incorrecte, torna a provar")

        elif opcio == 2:

            lletra_intent = input("Prova lletra: ").lower()
            if lletra_intent in paraula:
                for i in range(llarg_paraula):
                    if paraula[i] == lletra_intent:
                        coincideix[i] = lletra_intent
                if "_" not in coincideix:
                    print("FELICITATS!!!! HAS TROBAT LA PARAULA")
                    print(" ".join(coincideix)) 
                    adivinada = True
            else:
                print(f"La lletra {lletra_intent} no és a la paraula.")
        else:
            print("Opció no vàlida. Tria 1 o 2.")
            continue

        intents +=1
        if intents == intents_maxims and not adivinada:
            print("NOOOOO, INTENTS ESGOTATS")

    


jugar = True
while jugar:
    print("\n ---MENÚ DE JOCS--- \n")
    try:
        opcio = int(input("A que vols jugar? \n (1) Endivina el número \n (2) Pedra, Paper, Tissores \n (3) Penjat \n (4) Deixar de jugar \n Tria: "))
    except ValueError:
        print("Opció no vàlida")
        continue
    if opcio == 1:
        endivina_num()
    elif opcio == 2:
        pedra_paper_tisores()
    elif opcio == 3:
        penjat()
    elif opcio == 4:
        jugar = False
    else:
        print("Opció no vàlida")