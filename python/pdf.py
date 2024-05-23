import os
from weasyprint import HTML

# Ensure the necessary environment variables are set
os.environ['FONTCONFIG_FILE'] = r'C:\Program Files (x86)\GTK2-Runtime\etc\fonts\fonts.conf'
os.environ['PATH'] += r';c:\Program Files (x86)\GTK2-Runtime\bin'

# Path to your HTML and CSS files
html_file = r'D:\laravel-code\portfolio\python\pdf.html'
css_file = r'D:\laravel-code\portfolio\python\css.css'

# Generate PDF
HTML(html_file).write_pdf('cv.pdf')
