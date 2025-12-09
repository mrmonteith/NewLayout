---

# NewLayout Project

A modular, responsive PHP + CSS layout designed to serve as the base for menu driven content in the center and other web applications. Built with **Flexbox** for maintainability and semantic HTML for clarity. 

---
# Laying out a standard layout

## 📐 Layout Structure

The site is divided into six main sections:

1. **Header (Logo + Title)**  
   - Displays the site logo and title side‑by‑side using Flexbox.  
   - Logo is constrained for consistent sizing.  
   - Title uses semantic `<h1>` styling.

2. **Top Information Banner**  
   - A horizontal bar for notices, alerts, or scrolling messages.  
   - Styled with a bold background color for visibility.

3. **Left Menu (Navigation)**  
   - Modular navigation loaded from `templates/leftcolumn.php`.  
   - Uses semantic `<nav>` and `<ul>` for accessibility.  
   - Active link styling highlights the current page.

4. **Main Content Area**  
   - Central section (`<main>`) where page‑specific content is displayed.  
   - Each script (e.g., `scripts1.php`) loads its own content here.

5. **Right Content Column**  
   - Supplemental information, tips, or contextual help.  
   - Modularized in `templates/rightcolumn.php`.

6. **Footer**  
   - Contains copyright, site name, and optional links.  
   - Modularized in `templates/footer.php`.

---

## 🗂 File Organization

```
NewLayout/
├── config.php              # Root configuration file (constants, settings)
├── css/
│   └── BaseLayout.css      # Flexbox layout and styling
├── templates/
│   ├── header.php          # Header section
│   ├── leftcolumn.php      # Navigation menu
│   ├── rightcolumn.php     # Right content
│   └── footer.php          # Footer section
├── scripts/
│   ├── scripts1.php        # Example script page
│   └── ...                 # Additional script pages
└── index.php               # Main homepage
```

---

## ⚙️ Usage

- **Configuration**:  
  Edit `config.php` to set constants like `TITLE` and `HOST_NAME`.

- **Adding new pages**:  
  Create a new file in `/scripts/` and include the modular templates:
  ```php
  require_once __DIR__ . '/../config.php';
  require_once __DIR__ . '/../templates/header.php';
  ...
  ```

- **Styling**:  
  Update `css/BaseLayout.css` for layout changes.  
  Responsive rules are included for screens under 768px.

---

## 🚀 Goals

- Maintain a **modular structure** for easy updates.  
- Ensure **responsive design** across desktop and mobile.  
- Provide a **clear base layout** for future scripts and applications.  
- Make the repo **recruiter‑ready** with clean documentation and semantic code.

---

Would you like me to also add a **Quick Start section** (with installation steps and how to run locally) so someone cloning your repo can get it running immediately? That’s often the first thing recruiters or collaborators look for.
