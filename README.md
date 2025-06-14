[![QuickBox](https://quickbox.io/files/2018/12/qb_logo_original.png "QuickBox")](https://quickbox.io)

---

# 🌐 QuickBox Pro Translations

Welcome to the **QuickBox Pro Translations Repository**!

This repository contains the language files used to localize **QuickBox Pro** into various languages. Whether you're fluent in another language or just want to help make QuickBox Pro more accessible, you're welcome to contribute.

> 💬 Got questions or want to suggest a new language?  
> Join us on our [Official Discord](https://discord.gg/mca7RSv5pa)!


## 🛠️ Contributing a New Language

Contributing is easy and we're happy to help you through the process. Here's how you can get started:

### 1. Clone the Repository

First, grab a copy of the repository:

```bash
git clone https://github.com/QuickBox/pro_v3_translations.git
```

You can use a Git desktop application (like GitKraken) to make this process even easier—just clone the repository to a folder on your system.

---

### 2. Duplicate and Rename a Language File

Use the English translation file (`lang_en.php`) as your starting template.

For example, if you're translating to Spanish:

- Copy `lang_en.php` and rename it to `lang_es.php`.
- Now edit `lang_es.php` and translate the values accordingly.
- Repeat this process for all other files in the `UI/lang/` and `CLI/lang/` directories.

#### Example editing PHP strings in the UI:

```php
$L['ACTIVATION'] = 'Activation';
```

Becomes:
```php
$L['ACTIVATION'] = 'Activación';
```

#### Example editing JS/JSON strings in the UI:

```json
"language": {
	"loading": {
		"failedToLoad": "Failed to load language file for {lang}",
		"loadedSuccessfully": "Language '{lang}' loaded successfully.",
		"errorLoading": "Error loading language file: {error}"
	}
},
```

Becomes:
```json
"language": {
	"loading": {
		"failedToLoad": "No se pudo cargar el archivo de idioma para {lang}",
		"loadedSuccessfully": "El idioma '{lang}' se cargó correctamente.",
		"errorLoading": "Error al cargar el archivo de idioma: {error}"
	}
},
```

> [!NOTE]
> We only translate the text inside the quotes following the key (e.g., `"failedToLoad": "Failed to load language file for {lang}"`). The key itself (e.g., `"failedToLoad"`) should remain unchanged.

#### Example editing CLI strings:

```bash
quickbox::lang::apt::update::header() {
	declare text="checking and performing apt updates..."
	quickbox::dashboard::log "${text}"
}
```

Becomes:
```bash
quickbox::lang::apt::update::header() {
	declare text="comprobando y realizando actualizaciones de apt..."
	quickbox::dashboard::log "${text}"
}
```

> [!NOTE] 
> We only translate the text inside the `declare text=` line for CLI strings. The rest of the code should remain unchanged.

---

### 3. Create a Pull Request

> [!IMPORTANT]
> Ensure every string is translated thoroughly and accurately.

Once you've completed your translations:

1. Commit your changes to your fork.
2. Push your changes.
3. Open a Pull Request (PR) to the main repository.

We'll review the file, and if everything looks good, your language will be included in the next release of QuickBox Pro.

---

### 4. Celebrate 🎉

That's it! You've helped make QuickBox Pro better for users around the world.
Take pride in your contribution—*you rock!*

---

## 📝 Contributing corrections

If you find any strings that need correction or improvement, please feel free to submit a pull request with your suggestions.


## 🗣️ Supported Languages (Currently Available)

- English (en)
- Chinese-Simplified (zh-cn)
- Danish (dk)
- French (fr)
- German (de)
- Portuguese (pt)
- Spanish (es)

## 📂 Directory Structure

The repository is organized as follows:
```
pro_v3_translations/ 
├── CLI/ 
│ └── lang/ 
│   └── xx/
│     └── cli_lang
├── UI/ 
│ └── lang/ 
│   └── lang_xx.php
│   └── plugins/
│     ├── bootstrapt-select
│     │ └── lang_xx.js 
│     ├── datatables
│     │ └── lang_xx.json
│     └── wsd
│       └── lang_xx.json
└── README.md
```

### Directory Breakdown

- **CLI/lang/**: Contains language files for the Command-Line Interface (CLI) components of QuickBox Pro.
- **UI/lang/**: Contains language files for the User Interface (UI) components of QuickBox Pro.
- **UI/lang/plugins/**: Contains language files for various plugins used in the UI.
  - **bootstrapt-select**: Language files for the Bootstrap Select plugin.
  - **datatables**: Language files for the DataTables plugin.
  - **wsd**: Language files for the What's Streaming Dashboard.
- **README.md**: The file you're currently reading, providing information on how to contribute.

---

Thank you for contributing to the global accessibility of QuickBox Pro! 💖