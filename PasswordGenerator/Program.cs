using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading;
using System.Threading.Tasks;

namespace PasswordGenerator
{
    class Program
    {
        static void Main(string[] args)
        {
            #region Get Values
            //Variables
            string randStringTochar = ("A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z");
            string[] randString = randStringTochar.Split(' ');
            Random passRand;
            int PassLen;
            bool[] erResult = new bool[6];
            char[] yORn;
            //Pass Len
            Console.Write("Enter Password length :");
            //Error 0
            erResult[0] = int.TryParse(Console.ReadLine().Trim(), out PassLen);
            if (erResult[0] == false)
            {
                Console.WriteLine("Error !");
                return;
            }
            yORn = new char[5];
            // a-z?
            Console.Write("Letters (a-z) or (A-Z) in your Password? (Y,N) :");
            //Error 1
            erResult[1] = char.TryParse(Console.ReadLine().Trim().ToLower(), out yORn[0]);
            if (erResult[1] == false)
            {
                Console.WriteLine("Error !");
                return;
            }
            //check y or n
            if ((yORn[0].Equals('y') || yORn[0].Equals('n')) == false)
            {
                Console.WriteLine("Error !");
                return;
            }
            // Start with Letter?
            if (yORn[0].Equals('y'))
            {
                Console.Write("Your first char password is Letter ? (Y,N) : ");
                //Error 2
                erResult[2] = char.TryParse(Console.ReadLine().Trim().ToLower(), out yORn[1]);
                if (erResult[2] == false)
                {
                    Console.WriteLine("Error !");
                    return;
                }
                //check y or n
                if ((yORn[1].Equals('y') || yORn[1].Equals('n')) == false)
                {
                    Console.WriteLine("Error !");
                    return;
                }
                Console.WriteLine();
            }
            #endregion
            #region Generate Password
            if (yORn[0].Equals('n'))
            {
                passRand = new Random();
                Console.WriteLine();
                Console.Write("Your password is : ");
                Console.ForegroundColor = ConsoleColor.DarkGreen;
                for (int i = 0; i < PassLen; i++)
                {
                    Console.Write(passRand.Next(0, 10));
                    Thread.Sleep(15);
                }
                Console.WriteLine();
            }
            else if (yORn[0].Equals('y') && yORn[1].Equals('n'))
            {
                passRand = new Random();
                int numChar;
                Console.Write("Your Password is : ");
                Console.ForegroundColor = ConsoleColor.DarkGreen;
                for (int i = 0; i < PassLen; i++)
                {
                    if (i == 0)
                    {
                        Console.Write(passRand.Next(0, 10));
                    }
                    else if ((i % 2) == 0)
                    {
                        numChar = passRand.Next(0, randString.Length);
                        Console.Write(randString[numChar]);
                    }
                    else if (((i % 2) != 0))
                    {
                        Console.Write(passRand.Next(0, 10));
                    }
                    Thread.Sleep(15);
                }
                Console.WriteLine();
            }
            else if (yORn[0].Equals('y') && yORn[1].Equals('y'))
            {
                passRand = new Random();
                int numChar;
                Console.Write("Your Password is : ");
                Console.ForegroundColor = ConsoleColor.DarkGreen;
                for (int i = 0; i < PassLen; i++)
                {
                    if (i == 0)
                    {
                        numChar = passRand.Next(0, randString.Length);
                        Console.Write(randString[numChar]);
                    }
                    else if ((i % 2) == 0)
                    {
                        Console.Write(passRand.Next(0, 10));
                    }
                    else if ((i % 2) != 0)
                    {
                        numChar = passRand.Next(0, randString.Length);
                        Console.Write(randString[numChar]);
                    }
                    Thread.Sleep(15);
                }
                Console.WriteLine();
            }
            #endregion
            Console.ReadKey();
        }
    }
}

