#include <iostream>	
#include <fstream>	
#include <ctime>
#include <cstdlib>
#include <string>
#include <vector>
#include <cmath>

using namespace std;




int main()
{
  ifstream file("Example.txt");
  
  if(file == NULL)
    {
      cout << "Example.txt not found..." << endl;
      exit(1);
    }
  
  vector<string> words;

  cout<<"The unrobust programme estimates probability densities for X, the first letter of a word, and Y, the last letter and then calculates the entropies; it uses as a sample corpus the file Example.txt which should be placed in the same directory, this sample corpus is much too small for this to really work."<<endl;

  vector<vector<double > > p;

  {
    vector<double> line(26,0);
    p.resize(26,line);
  }


  while(!file.eof())
    {
      string word;
      file >> word;
      words.push_back(word);
    }

  int n=words.size();

  for(unsigned int i=0;i<words.size() ;++i)
      p.at(int(words.at(i)[0])-97).at(int(words.at(i)[words.at(i).length()-1])-97)++;

  for(unsigned int i=0;i<p.size() ;++i)
    for(unsigned int j=0;j<p.at(i).size() ;++j)
      p.at(i).at(j)/=double(words.size());


  double hxy=0;
  double hx=0;
  double hy=0;
  double ixy=0;

  vector<double> px(26,0);
  vector<double> py(26,0);

  for(unsigned int i=0;i<p.size() ;++i)
    for(unsigned int j=0;j<p.at(i).size() ;++j)
      {
	px.at(i)+=p.at(i).at(j);
	py.at(j)+=p.at(i).at(j);
      }

  for(unsigned int i=0;i<p.size() ;++i)
    {
      if(px.at(i)!=0)
	hx-=px.at(i)*log(px.at(i));
      if(py.at(i)!=0)
	hy-=py.at(i)*log(py.at(i));
    }

  for(unsigned int i=0;i<p.size() ;++i)
    for(unsigned int j=0;j<p.at(i).size() ;++j)
      if(p.at(i).at(j)!=0)
	{
	  hxy-=p.at(i).at(j)*log(p.at(i).at(j));
	  ixy+=p.at(i).at(j)*log(p.at(i).at(j)/(px.at(i)*py.at(j)));
	}

  cout<<"H(X,Y)="<<hxy<<endl;
  cout<<"H(X)="<<hx<<endl;
  cout<<"H(Y)="<<hy<<endl;
  cout<<"I(X,Y)="<<ixy<<endl;
  cout<<"H(X)+H(Y)-H(X,Y)="<<hx+hy-hxy<<endl;
	    




}

