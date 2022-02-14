#include <iostream>
#include <string>
using namespace std;

class FootballTeam
{
    private:
        string namaTim;
        string negara;
        int tahun;
        string pemain;
    
    public:
        FootballTeam(){}

        // konstruktor
        FootballTeam(string namaTim, string negara, int tahun, string pemain)
        {
            this->namaTim = namaTim;
            this->negara = negara;
            this->tahun = tahun;
            this->pemain = pemain;
        }

        // set nama namaTim
        void setNamaTim(string namaTim)
        {
            this->namaTim = namaTim;
        }

        // get nama namaTim
        string getNamaTim()
        {
            return this->namaTim;
        }

        // set Negara
        void setNegara(string negara)
        {
            this->negara = negara;
        }

        // get nama namaTim
        string getNegara()
        {
            return this->negara;
        }

        // set Tahun berdiri
        void setTahun(int tahun)
        {
            this->tahun = tahun;
        }

        // get Tahun berdiri
        int getTahun()
        {
            return this->tahun;
        }

        // set Pemain
        void setPemain(string pemain)
        {
            this->pemain = pemain;
        }

        // get Pemain
        string getPemain()
        {
            return this->pemain;
        }

        ~FootballTeam(){};

};
