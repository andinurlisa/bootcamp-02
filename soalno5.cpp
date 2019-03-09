#include<iostream.h>

int hitungParkir(int lama)
{
	int harga;
	harga=2000;
	if (lama >= 2)
	{
		harga=(lama*1000)+ 2000;
	}

	if (harga>10000)
	{
			 harga=10000;
	}
	return harga;
}
void main()
{
cout<<hitungParkir(1);
cout<<"\n";
cout<<hitungParkir(3);
cout<<"\n";
cout<<hitungParkir(10);

}

