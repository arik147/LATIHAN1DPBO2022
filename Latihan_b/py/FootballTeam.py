class FootballTeam():
    # private
    __namaTim = ''
    __negara = ''
    __tahun = 0
    __pemain = ''

    # konstruktor
    def __init__(self, namaTim = '', negara = '', tahun = 0, pemain = ''):
        self.__namaTim = namaTim
        self.__negara = negara
        self.__tahun = tahun
        self.__pemain = pemain

    # set Nama Tim
    def setNamaTim(self, namaTim):
        self.__namaTim = namaTim
    
    # get nama Tim
    def getNamaTim(self):
        return self.__namaTim

    # set Negara
    def setNegara(self, negara):
        self.__negara = negara
    
    # get Negara
    def getNegara(self):
        return self.__negara

    # set tahun berdiri
    def setTahun(self, tahun):
        self.__tahun = tahun
    
    # get tahun berdiri
    def getTahun(self):
        return self.__tahun

    # set pemain
    def setPemain(self, pemain):
        self.__pemain = pemain
    
    # get pemain
    def getPemain(self):
        return self.__pemain