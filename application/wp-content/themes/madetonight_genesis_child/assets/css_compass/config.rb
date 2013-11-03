# Require any additional compass plugins here.

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "../../"
sass_dir = "scss"
images_dir = "../img"
javascripts_dir = "../js"

is_production = :environment == 'production'

# You can select your preferred output style here (can be overridden via the command line):

output_style = is_production ? :compressed : :expanded

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = is_production ? false : true