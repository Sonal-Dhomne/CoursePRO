# CoursePRO

CoursePRO is a comprehensive course management system designed to simplify the administration and participation in various educational courses. It offers a user-friendly interface for both instructors and students, facilitating the management of courses, assignments, grades, and communications.

## Features

- **Course Management:** Create, update, and delete courses.
- **User Roles:** Support for different user roles (instructors, students).
- **Assignment Management:** Create, distribute, and grade assignments.
- **Grade Tracking:** Track and manage student grades.
- **Communication:** Built-in messaging system for instructors and students.

## Requirements

- PHP 7.x or higher
- MySQL
- Apache web server

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Sonal-Dhomne/CoursePRO.git
    cd CoursePRO
    ```

2. **Set up the database:**

    - Import the `lms_db.sql` file into your MySQL database.
    - Configure the database connection settings in `dbConnection.php`.

3. **Configure your web server:**

    - Ensure your web server is set up to serve the PHP files in the `CoursePRO` directory.

## Usage

1. **Instructors:**

    - Log in with your instructor account.
    - Create and manage courses.
    - Add and grade assignments.
    - Communicate with students through the messaging system.

2. **Students:**

    - Log in with your student account.
    - Enroll in available courses.
    - Submit assignments and track grades.
    - Communicate with instructors through the messaging system.

## Directory Structure

- `Admin/`: Contains admin-related pages and functionalities.
- `Student/`: Contains student-related pages and functionalities.
- `css/`: Stylesheets.
- `js/`: JavaScript files.
- `mainInclude/`: Includes common files used across multiple pages.
- `uploads/`: Directory for file uploads.
- `video/`: Directory for video files.


## Acknowledgements

- [PHP](https://www.php.net/) for providing the server-side scripting language.
- [MySQL](https://www.mysql.com/) for the database management system.
- [Apache](https://httpd.apache.org/) for the web server.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or bug fixes.

## Contact

For any inquiries or issues, please contact [Sonal Dhomne](mailto:your-email@example.com).
