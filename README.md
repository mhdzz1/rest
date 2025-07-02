# GOGO Pizza Restaurant Management System

A comprehensive web-based restaurant management system for GOGO Pizza, featuring user authentication, menu management, order processing, and administrative controls.

## Features

### User Management
- **User Registration & Login**: Secure authentication system with password hashing
- **Profile Management**: Users can view and edit their personal information
- **Address Management**: Complete delivery address system for future delivery functionality
  - Street address, city, postal code, and country fields
  - Address information stored with user profiles
  - Ready for delivery system integration
- **Order History**: Users can view their complete order history with details

### Menu System
- **Dynamic Categories**: Admin can add, edit, and delete menu categories
- **Menu Items**: Full CRUD operations for menu items with images and ingredients
- **Category Organization**: Menu items organized by categories in both menu and order pages
  - Consistent category order across all pages
  - Beautiful category headers with icons
  - Items grouped logically for easy browsing
  - Search functionality works across all categories
- **Real-time Updates**: Menu changes are broadcast across all pages instantly
- **Search Functionality**: Advanced search across menu items with highlighting
- **Image Upload**: Support for menu item images with preview functionality

### Order Management
- **Shopping Cart**: Add/remove items with quantity controls
- **Floating Cart Bubble**: Modern floating cart interface in bottom-left corner
  - Always visible when items are in cart
  - Tap to open detailed cart panel
  - Quick quantity adjustments (+/- buttons)
  - Real-time total calculation
  - Smooth animations and hover effects
  - Mobile-responsive design
  - **Persistent Panel**: Cart panel stays open when adding/removing items
- **Category Filtering**: Filter menu items by category during ordering
  - Category filter buttons at the top of the page
  - Click any category to show only items from that category
  - "All Categories" button to show everything
  - Search automatically clears category filters
  - Visual feedback for active category selection
- **Ingredient Availability Checking**: Real-time ingredient stock validation
  - **Prevents Orders**: Blocks orders when ingredients are completely out of stock
  - **Low Stock Warnings**: Alerts users when ingredients are running low
  - **Detailed Feedback**: Shows exactly which ingredients are missing or low
  - **Smart Processing**: Allows orders with warnings for low stock items
- **Order Processing**: Complete order workflow with user association
- **Order History**: Detailed order tracking for both users and admins
- **Price Calculation**: Automatic total calculation with tax considerations

### Admin Dashboard
- **Comprehensive Overview**: Earnings tracking, stock management, and order monitoring
- **Menu Management**: Full control over menu items and categories
- **Order Management**: View and manage all customer orders
- **Ingredient Stock**: Track ingredient usage and restock management
  - **Full Restock System**: One-click full restock (1000g) for any ingredient
  - **Manual Restock**: Custom amount restocking for precise inventory control
  - **Measurement Units**: Support for multiple units (g, kg, oz, lb) with automatic conversion
  - **Bulk Full Restock**: Restock all ingredients at once with specified amount and unit
  - **Dynamic Ingredient Management**: Add, view, and delete ingredients dynamically
    - **Add New Ingredients**: Create new ingredients with custom names, categories, and initial stock
    - **Ingredient Categories**: Organize ingredients by categories (dairy, meat, vegetables, etc.)
    - **Ingredient List**: View all current ingredients with details and delete options
    - **Automatic Integration**: New ingredients automatically appear in restock dropdowns and bulk operations
  - **Real-time Stock Tracking**: Monitor ingredient levels and usage patterns
  - **Stock Alerts**: Visual indicators for low stock ingredients
- **Staff Management**: Complete HR system for restaurant staff
  - Add, edit, and delete staff members
  - Store CV/resume information for each employee
  - Track employee details: name, position, contact info, department, salary, hire date
  - Employee status management (Active, Inactive, On Leave)
  - Professional staff cards with detailed information display
- **Modern UI/UX**: Collapsible dropdown sections for better organization
  - **Clean Interface**: Forms hidden by default, expand on click
  - **Smooth Animations**: Chevron rotation and content transitions
  - **Organized Sections**: Logical grouping of related functions
  - **Space Efficient**: Reduces visual clutter while maintaining functionality

### Technical Features
- **Responsive Design**: Mobile-friendly interface across all devices
- **Real-time Communication**: Cross-page updates using localStorage events
- **Modern UI**: Beautiful, intuitive interface with smooth animations
- **Data Persistence**: JSON-based data storage with PHP backend
- **Security**: Password hashing and input validation

## File Structure

```
batoul/
├── index.html              # Home page
├── login.html              # User login
├── signup.html             # User registration with address fields
├── menu.html               # Menu display with search and categories
├── order.html              # Order processing page
├── profile.html            # User profile with address management
├── dashboard.html          # Admin dashboard with staff management
├── php/
│   ├── users.json          # User data storage
│   ├── menu.json           # Menu items data
│   ├── categories.json     # Menu categories
│   ├── orders.json         # Order data
│   ├── restocks.json       # Ingredient restock records
│   ├── staff.json          # Staff member data
│   ├── login.php           # Authentication handler
│   ├── signup.php          # User registration with address
│   ├── update_profile.php  # Profile update handler
│   ├── get_menu.php        # Menu data retrieval
│   ├── save_menu.php       # Menu data storage
│   ├── add_category.php    # Category management
│   ├── delete_category.php # Category deletion
│   ├── save_order.php      # Order processing
│   ├── get_orders.php      # Order retrieval
│   ├── get_user_orders.php # User-specific orders
│   ├── upload_image.php    # Image upload handler
│   ├── add_menu_item.php   # Menu item creation
│   ├── edit_menu_item.php  # Menu item editing
│   ├── delete_menu_item.php # Menu item deletion
│   ├── restock_ingredient.php # Ingredient restocking
│   ├── get_staff.php       # Staff data retrieval
│   ├── add_staff.php       # Staff member creation
│   ├── edit_staff.php      # Staff member editing
│   └── delete_staff.php    # Staff member deletion
└── IMG/                    # Image assets
```

## Setup Instructions

1. **Server Requirements**:
   - PHP 7.4 or higher
   - Web server (Apache/Nginx)
   - File write permissions for JSON data files

2. **Installation**:
   - Upload all files to your web server
   - Ensure the `php/` directory is writable
   - Access the application through your web browser

3. **Initial Setup**:
   - Create an admin account through the signup page
   - Add menu categories and items through the dashboard
   - Configure staff members as needed

## Usage

### For Customers
1. **Registration**: Create an account with complete address information
2. **Browsing**: View menu items by category with search functionality
3. **Ordering**: Add items to cart and complete checkout process
4. **Profile Management**: Update personal information and view order history

### For Administrators
1. **Dashboard Access**: Login to access comprehensive management tools
2. **Menu Management**: Add, edit, and delete menu items and categories
3. **Order Monitoring**: Track all customer orders and earnings
4. **Staff Management**: Manage employee information, CVs, and status
5. **Inventory Control**: Monitor ingredient stock and restock as needed

## Security Features

- Password hashing using PHP's built-in `password_hash()` function
- Input validation and sanitization
- JSON data storage with proper error handling
- Session management for user authentication

## Future Enhancements

- **Delivery System**: Integration with the address system for delivery orders
- **Payment Processing**: Online payment gateway integration
- **Inventory Alerts**: Automatic low stock notifications
- **Analytics Dashboard**: Advanced reporting and analytics
- **Mobile App**: Native mobile application development
- **Multi-location Support**: Support for multiple restaurant locations

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+
- **Styling**: W3.CSS Framework, Font Awesome Icons
- **Data Storage**: JSON files with PHP file operations
- **Real-time Updates**: localStorage events and custom event dispatching

## Contributing

This is a comprehensive restaurant management system designed for GOGO Pizza. The system is modular and can be easily extended with additional features as needed.

## License

This project is developed for GOGO Pizza restaurant management purposes. 