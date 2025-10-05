# Drift Wood Website

A modern, responsive website built with HTML, CSS, JavaScript, and PHP, featuring Tailwind CSS for rapid development.

## Project Structure

```
drift-wood/
├── assets/
│   ├── css/
│   │   ├── input.css          # Tailwind CSS input file
│   │   └── main.css           # Compiled CSS (generated)
│   ├── js/
│   │   └── main.js            # Main JavaScript file
│   ├── images/                # Image assets
│   └── fonts/                 # Font files
├── pages/
│   ├── about.html             # About page
│   ├── services.html          # Services page
│   ├── contact.html           # Contact page
│   ├── booking.php            # Booking form page
│   └── process_booking.php    # Booking form handler
├── includes/
│   ├── header.php             # Common header
│   └── footer.php             # Common footer
├── config/
│   └── database.php           # Database configuration
├── index.html                 # Homepage
├── package.json               # Node.js dependencies
├── tailwind.config.js         # Tailwind CSS configuration
└── README.md                  # This file
```

## Features

- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Modern UI**: Clean, professional design with smooth animations
- **Booking System**: PHP-based booking form with database integration
- **SEO Optimized**: Proper meta tags and semantic HTML
- **Accessibility**: WCAG compliant markup and navigation
- **Performance**: Optimized assets and efficient code structure

## Getting Started

### Prerequisites

- Web server with PHP support (Apache/Nginx)
- Node.js and npm (for Tailwind CSS)
- MySQL database (for booking functionality)

### Installation

1. **Clone or download the project files**

2. **Install Node.js dependencies:**

   ```bash
   npm install
   ```

3. **Set up the database:**

   - Create a MySQL database named `drift_wood_db`
   - Update database credentials in `config/database.php`
   - Run the SQL commands in `config/database.php` to create tables

4. **Build Tailwind CSS:**

   ```bash
   # For development (with watch mode)
   npm run build-css

   # For production (minified)
   npm run build-css-prod
   ```

5. **Configure your web server:**
   - Point document root to the project directory
   - Ensure PHP is enabled
   - Set up proper URL rewriting if needed

## Development

### Tailwind CSS

The project uses Tailwind CSS for styling. The main configuration is in `tailwind.config.js` with custom colors and components defined in `assets/css/input.css`.

### Custom CSS Classes

- `.btn-primary`: Primary button style
- `.btn-secondary`: Secondary button style
- `.card`: Card component style
- `.section-padding`: Standard section padding
- `.container-custom`: Custom container with max-width

### JavaScript

The main JavaScript file (`assets/js/main.js`) includes:

- Mobile menu toggle
- Smooth scrolling
- Form validation
- Header scroll effects
- Utility functions

## File Structure Details

### HTML Pages

- `index.html`: Homepage with hero section and features
- `pages/about.html`: About page (to be created)
- `pages/services.html`: Services page (to be created)
- `pages/contact.html`: Contact page (to be created)

### PHP Files

- `pages/booking.php`: Booking form with validation
- `includes/header.php`: Reusable header with navigation
- `includes/footer.php`: Reusable footer
- `config/database.php`: Database configuration and table creation

### Assets

- `assets/css/input.css`: Tailwind CSS source file
- `assets/js/main.js`: Main JavaScript functionality
- `assets/images/`: Image assets (add your images here)
- `assets/fonts/`: Font files (if using custom fonts)

## Customization

### Colors

Update the color scheme in `tailwind.config.js`:

```javascript
theme: {
  extend: {
    colors: {
      primary: { /* your primary colors */ },
      secondary: { /* your secondary colors */ }
    }
  }
}
```

### Content

- Update company information in header and footer includes
- Modify service offerings in the booking form
- Add your own images to the `assets/images/` folder

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## License

MIT License - feel free to use this project for your own purposes.

## Support

For questions or issues, please contact the development team.





