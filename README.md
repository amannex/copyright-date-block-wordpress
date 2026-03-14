# Copyright Date Block for WordPress

[![WordPress](https://img.shields.io/badge/WordPress-5.9%2B-blue?logo=wordpress)](https://wordpress.org)
[![License](https://img.shields.io/badge/license-GPL--2.0%2B-green)](https://www.gnu.org/licenses/gpl-2.0.html)
[![Block Editor](https://img.shields.io/badge/Gutenberg-Block-orange)](https://developer.wordpress.org/block-editor/)

A lightweight WordPress Gutenberg block that automatically displays a dynamic copyright notice with the current year — perfect for footers, sidebars, and anywhere you need an always-up-to-date copyright line.

---

## 📸 Preview

> Add the **Copyright Date** block from the block inserter and it instantly renders a copyright notice that always reflects the current year — no manual updates needed.

---

## ✨ Features

- 📅 **Dynamic Year** — Automatically displays the current year; no manual updates required year after year
- 📆 **Year Range Support** — Optionally set a start year to show a range like `© 2020–2025`
- ✏️ **Custom Text** — Add a custom name or brand text alongside the copyright symbol
- 🎨 **Full Block Editor Support** — Integrates natively with the WordPress block editor (Gutenberg)
- 🖌️ **Typography & Color Controls** — Leverages WordPress core block supports for text color, background color, and font settings
- 📱 **Responsive** — Renders cleanly across all screen sizes
- 🧩 **No Shortcodes Needed** — Pure block-based implementation
- ⚡ **Lightweight** — Minimal footprint with no external dependencies

---

## 🗂️ File Structure

```
copyright-date-block-wordpress/
├── build/                          # Compiled production assets (auto-generated)
│   ├── index.js                    # Compiled block JavaScript
│   ├── index.asset.php             # Auto-generated asset dependencies & version
│   └── style-index.css             # Compiled block styles
├── src/                            # Source files
│   ├── block.json                  # Block metadata (name, attributes, supports)
│   ├── edit.js                     # Block editor (backend) component
│   ├── save.js                     # Block save / frontend output component
│   ├── editor.scss                 # Editor-only styles
│   └── style.scss                  # Frontend + editor shared styles
├── .gitignore
├── copyright-date-block.php        # Main plugin file — registers the block
├── package.json                    # Node dependencies & build scripts
├── package-lock.json
└── README.md
```

---

## 🚀 Installation

### From Source (Development)

1. **Clone the repository** into your WordPress plugins directory:

   ```bash
   git clone https://github.com/amannex/copyright-date-block-wordpress.git wp-content/plugins/copyright-date-block-wordpress
   ```

2. **Install Node dependencies:**

   ```bash
   cd copyright-date-block-wordpress
   npm install
   ```

3. **Build the plugin assets:**

   ```bash
   npm run build
   ```

4. **Activate the plugin** from your WordPress Admin → Plugins dashboard.

### Manual Installation

1. Download the repository as a `.zip` file from GitHub.
2. Go to **WordPress Admin → Plugins → Add New → Upload Plugin**.
3. Upload the `.zip` file and click **Install Now**.
4. Click **Activate Plugin**.

---

## 🛠️ Usage

1. Open any **page, post, or template** in the WordPress block editor.
2. Click the **Block Inserter** (`+`) or type `/copyright` in the editor.
3. Select the **Copyright Date** block.
4. Use the **block settings panel** (right sidebar) to:
   - Set a **start year** for a year range (e.g., `2020–2025`)
   - Edit the **display name** or brand text
   - Toggle displaying just the current year vs. a range
5. Use **Typography** and **Color** controls in the block toolbar to style the output to match your theme.

### Example Output

```
© 2020–2025 Your Brand Name
```

or simply:

```
© 2025 Your Brand Name
```

---

## ⚙️ Block Attributes

| Attribute      | Type    | Default     | Description                                      |
|----------------|---------|-------------|--------------------------------------------------|
| `startYear`    | string  | `""`        | The starting year for a copyright year range     |
| `showStartYear`| boolean | `false`     | Whether to show a year range or just current year|
| `displayName`  | string  | `""`        | Name or brand text to display after the year     |

---

## 💻 Development

### Prerequisites

- **Node.js** v16+
- **npm** v8+
- A local WordPress installation

### Available Scripts

```bash
# Start development mode with file watching
npm run start

# Build for production
npm run build

# Lint JS files
npm run lint:js

# Lint CSS/SCSS files
npm run lint:css
```

This plugin uses [`@wordpress/scripts`](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) for its build toolchain.

---

## 📋 Requirements

| Requirement     | Version  |
|-----------------|----------|
| WordPress       | 5.9+     |
| PHP             | 7.4+     |
| Node.js (dev)   | 16+      |
| Block Editor    | Required |

> **Note:** This block requires the WordPress block editor (Gutenberg). It is **not** compatible with the Classic Editor.

---

## 🤝 Contributing

Contributions are welcome! Here's how to get started:

1. Fork the repository
2. Create a new branch: `git checkout -b feature/your-feature-name`
3. Make your changes and commit: `git commit -m "Add your feature"`
4. Push to your fork: `git push origin feature/your-feature-name`
5. Open a **Pull Request** on GitHub

Please follow [WordPress Coding Standards](https://developer.wordpress.org/coding-standards/) for any contributions.

---

## 🐛 Issues & Support

Found a bug or have a feature request? [Open an issue](https://github.com/amannex/copyright-date-block-wordpress/issues) on GitHub.

---

## 📄 License

This plugin is licensed under the [GNU General Public License v2.0 or later](https://www.gnu.org/licenses/gpl-2.0.html).

```
Copyright (C) 2025 amannex

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
```

---

## 🔗 Links

- 🐙 **GitHub Repository:** [https://github.com/amannex/copyright-date-block-wordpress](https://github.com/amannex/copyright-date-block-wordpress)
- 📦 **WordPress Block Editor Handbook:** [https://developer.wordpress.org/block-editor/](https://developer.wordpress.org/block-editor/)