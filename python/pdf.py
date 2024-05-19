import os
import weasyprint

# # # Set GTK_RUNTIME_PATH environment variable
os.environ['GTK_RUNTIME_PATH'] = r'C:\Program Files (x86)\GTK2-Runtime\bin'

# Now you can import HTML from WeasyPrint
from weasyprint import HTML

# Path to your HTML and CSS files
html_file = 'pdf.html'
css_file = 'css.css'

# Generate PDF
HTML(html_file).write_pdf('cv.pdf', stylesheets=[css_file])

