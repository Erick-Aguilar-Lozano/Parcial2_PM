using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Imaging;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace $safeprojectname$
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        Color c1;
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Archivos BMP|*.bmp|Archivos JPG|*.jpg|Todos los archivos|*.*";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void button2_Click(object sender, EventArgs e)
        {
            Bitmap bmp1 = new Bitmap(pictureBox1.Image);
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();int rm, bm, gm;
            for(int i=0; i< bmp.Width - 5; i=i+5)
            {
                for (int j = 0; j < bmp.Height - 5; j = j + 5)
                {
                    rm = 0; bm = 0; gm = 0;
                    for(int im=i; im< i +5; im++)
                        for (int jm = j; jm< j+5; jm++)
                        {
                            c = bmp1.GetPixel(i, j);
                            rm = rm + c.R; gm = gm + c.G; bm = bm + c.B;
                        }
                    rm = rm /25; gm = gm /25; bm = bm /25;                    
                    if ((rm > c1.R - 5 && rm < c1.R + 5) && (gm > c1.G - 5 && gm < c1.G + 5) && (bm > c1.B - 5 && bm < c1.B + 5))
                    {
                        for (int im = i; im < i + 5; im++)
                            for (int jm = j; jm < j + 5; jm++)
                            { bmp2.SetPixel(im, jm, Color.Red); }
                    }
                    else
                    {
                        for (int im = i; im < i + 5; im++)
                            for (int jm = j; jm < j + 5; jm++)
                            {
                                c = bmp1.GetPixel(im, jm);
                                bmp2.SetPixel(im, jm, Color.FromArgb(c.R, c.G, c.B));
                            }
                    }
                }
            }
            pictureBox1.Image = bmp2;
        }

        private void pictureBox1_MouseClick(object sender, MouseEventArgs e)
        {
            Color c = new Color();
            c = bmp.GetPixel(e.X, e.Y);
            textBox1.Text = c.R.ToString();
            textBox2.Text = c.G.ToString();
            textBox3.Text = c.B.ToString();
            c1 = c;
        }

        private void button3_Click(object sender, EventArgs e)
        {
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width; i++)
                for (int j = 0; j < bmp.Height; j++)
                {
                    c = bmp.GetPixel(i, j);
                    bmp2.SetPixel(i, j, Color.FromArgb(c.R, 0, 0));
                }
            pictureBox1.Image = bmp2;
        }

        private void button4_Click(object sender, EventArgs e)
        {
            Bitmap bmp1 = new Bitmap(pictureBox1.Image);
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width; i++)
                for (int j = 0; j < bmp.Height; j++)
                {
                    c = bmp1.GetPixel(i, j);
                    if(c.R ==c1.R && c.G == c1.G && c.B ==c1.B)
                        bmp2.SetPixel(i, j, Color.Red);
                    else
                        bmp2.SetPixel(i, j, Color.FromArgb(c.R, c.G, c.B));
                }
            pictureBox1.Image = bmp2;
        }

        private void button5_Click(object sender, EventArgs e)
        {
            Bitmap bmp1 = new Bitmap(pictureBox1.Image);
            Bitmap bmp2 = new Bitmap(bmp.Width, bmp.Height);
            Color c = new Color();
            for (int i = 0; i < bmp.Width; i++)
                for (int j = 0; j < bmp.Height; j++)
                {
                    c = bmp1.GetPixel(i, j);
                    if ((c.R > c1.R-5 && c.R < c1.R+5 )&& (c.G > c1.G-5 && c.G < c1.G+5 )&& (c.B > c1.B-5 && c.B < c1.B+5))
                        bmp2.SetPixel(i, j, Color.Red);
                    else
                        bmp2.SetPixel(i, j, Color.FromArgb(c.R, c.G, c.B));
                }
            pictureBox1.Image = bmp2;
        }

    }
}
