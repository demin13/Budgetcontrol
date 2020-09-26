lpsm=[]
lpsm=list(map(int,input().split()))
maxarea=[]
maxarea=list(map(int,input().split()))
herbi=[]
carni=[]
aqua=[]
herbi=list(map(int,input().split()))
carni=list(map(int,input().split()))
aqua=list(map(int,input().split()))
totalarea=int(input())

hlpsm=lpsm[0]
clpsm=lpsm[1]
alpsm=lpsm[2]

hmaxarea=maxarea[0]
cmaxarea=maxarea[1]
amaxarea=maxarea[2]

if(hlpsm<clpsm and hlpsm<alpsm):
    hprice=hlpsm*hmaxarea
    if(clpsm>alpsm):
        charea=carni[0]*carni[1]
        chprice=charea*clpsm
        hremarea=totalarea-(hmaxarea+charea)
        ahprice=alpsm*hremarea
        print(hprice+chprice+ahprice)
    else:
        aharea=aqua[0]*aqua[1]
        ahprice=aharea*alpsm
        hremarea=totalarea-(hmaxarea+aharea)
        chprice=clpsm*hremarea
        print(hprice+chprice+ahprice)
    

elif(clpsm<hlpsm and clpsm<alpsm):
    cprice=clpsm*cmaxarea
    if(hlpsm>alpsm):
        hcarea=herbi[0]*herbi[1]
        hcprice=hcarea*hlpsm
        cremarea=totalarea-(cmaxarea+hcarea)
        acprice=alpsm*cremarea
        print(cprice+hcprice+acprice)
    else:
        acarea=aqua[0]*aqua[1]
        acprice=acarea*alpsm
        cremarea=totalarea-(cmaxarea+acarea)
        ccprice=clpsm*cremarea
        print(cprice+ccprice+acprice)
        
elif(alpsm<clpsm and alpsm<hlpsm):
    aprice=alpsm*amaxarea
    if(clpsm>hlpsm):
        caarea=carni[0]*carni[1]
        caprice=clpsm*caarea
        aremarea=totalarea-(amxarea+caarea)
        haprice=hlpsm*aremarea
        print(aprice+caprice+haprice)
    else:
        haarea=herbi[0]*herbi[1]
        haprice=hlpsm*haarea
        aremarea=totalarea-(amaxarea+haarea)
        caprice=clpsm*aremarea
        print(aprice+haprice+caprice)
        


    
