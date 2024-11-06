# Development of a Medical Platform

## Description

This project aims to design and develop a medical platform intended to facilitate the management of patient data and improve communication between healthcare professionals. The platform allows for secure storage, consultation, and sharing of medical information while adhering to privacy standards. It addresses issues such as data centralization and easy access to patients' medical histories.

## Functional Requirements

### Patients:

- Recherche des informations sur les cliniques, les médecins, les opérations et les publications.
- Planification des rendez-vous en ligne.
- Consulter les listes des cliniques.
- Accès à des publications médicales et des conseils de santé.
- Authentification pour accéder à certaines fonctionnalités.
- Gestion de son propre profil utilisateur.

### Doctors:

- Planification des rendez-vous en ligne avec les patients.
- Publier des publications médicales et des conseils de santé.
- Publier des opérations médicales.
- Publier des informations sur des cliniques.
- Authentification pour accéder à certaines fonctionnalités.
- Gestion de son propre profil utilisateur.

### Administrators:

- Gérer les demandes de vérification des médecins.
- Gérer publications médicales et des conseils de santé.
- Gérer les opérations médicales.
- Publier des informations sur des cliniques.
- Gérer les utilisateurs.
- Gérer les réclamations.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Screenshots](#screenshots)
- [Installation](#installation)
- [Usage](#usage)
- [Contributions](#contributions)
- [License](#license)
- [Authors and Acknowledgments](#authors-and-acknowledgments)
- [Contact](#contact)

## Features

- **Patient Management**: Add, edit, and delete patient records.
- **Medical History**: Consult patients' medical histories.
- **Data Security**: Secure access with user authentication.
- **User-Friendly Interface**: User-centered design for easy navigation.
- **Medical Reports**: Generate medical reports for better patient care.

## Technologies Used

- **Languages**: PHP, HTML, CSS, JavaScript
- **Frameworks**: Laravel
- **Database**: MySQL
- **Development Tools**: Visual Studio Code, XAMPP, GitHub
- **Design Tools**: Draw.io

## Screenshots

![Home Page](https://res.cloudinary.com/dkrfmqbj1/image/upload/v1730836846/GIT%20Development%20of%20a%20Medical%20Platform/screencapture-127-0-0-1-8000-2024-11-05-20_58_35_vpula9.png)
![Alternative View](https://res.cloudinary.com/dkrfmqbj1/image/upload/v1730836929/GIT%20Development%20of%20a%20Medical%20Platform/screencapture-127-0-0-1-8000-2024-11-05-20_58_35_1_krmoim.png)


## Installation

To install this project, please follow the steps below:

1. Clone the repository:
   ```bash
   git clone https://github.com/your_username/project_name.git
   ```
2. Navigate to the project directory:
   ```bash
   cd project_name
   ```
3. Install the dependencies using Composer:
   ```bash
   composer install
   ```
4. Configure the `.env` file with your database settings.
5. Run the migrations:
   ```bash
   php artisan migrate
   ```
6. Start the server:
   ```bash
   php artisan serve
   ```

## Usage

To use the platform, open your browser and go to `http://localhost:8000`. Log in with your administrative credentials to access all features.

### Example Commands

- **To start the server**:
  ```bash
  php artisan serve
  ```

## Contributions

Contributions are welcome! To contribute to this project, please follow these steps:

1. Fork the project.
2. Create your feature branch:
   ```bash
   git checkout -b my-new-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m 'Add a new feature'
   ```
4. Push to the remote repository:
   ```bash
   git push origin my-new-feature
   ```
5. Open a Pull Request.

Please adhere to the code of conduct when contributing.

## License

This project is licensed under the MIT License. For more details, please see the LICENSE file.

## Authors and Acknowledgments

- **Mohamed** - Lead Developer

   ## Contact
   For any questions or feedback, you can reach me at:
   - **Email**: medali.zbaira.contact@gmail.com

   
   Copyright (c) 2024 Mohamed. All rights reserved.
   This code is licensed under the MIT License.
  
