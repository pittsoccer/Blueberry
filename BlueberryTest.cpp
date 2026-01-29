
#include <iostream>
using namespace std;

int main()
{
	for (int i = 0; i <= 100; i++)
	{
		if ((i % 15) == 0)
		{
			cout << i << " Blueberry" << endl;
		}
		else if ((i % 3) == 0)
		{
			cout << i << " Blue" << endl;
		}
		else if ((i % 5) == 0)
		{
			cout << i << " Berry" << endl;
		}
		else
		{
			cout << i << endl;
		}
	}	
	
return 0;
}

