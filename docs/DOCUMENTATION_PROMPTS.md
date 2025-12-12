# Documentation Prompts for Frontier Packages

This file contains reusable prompts for generating consistent documentation across all Frontier ecosystem packages. Use these prompts with AI assistants to create standardized documentation.

---

## 📖 AI_GUIDE.md Prompts

Use these prompts to create detailed AI_GUIDE.md files for each package.

### 📦 Prompt for `frontier/action`

```
Analyze my codebase and create comprehensive documentation for this Laravel package.

This is the `frontier/action` package - a companion package to `frontier/frontier` (Laravel Starter Kit) that provides Action classes for encapsulating business logic.

Please:
1. Analyze the entire package structure and code
2. Create an `AI_GUIDE.md` file in the package root with:
   - Package overview and purpose
   - Architecture diagram (Mermaid)
   - Core components and their responsibilities
   - Design patterns used
   - Installation and usage instructions
   - Code examples showing:
     - How to create an Action class
     - How to use Actions in controllers
     - How to test Actions
   - Use cases and best practices
   - When to use Actions vs other patterns
   - File reference table with links

3. Document the relationship to parent package `frontier/frontier`
4. Include extension/customization guide

Focus on making this documentation useful for both AI assistants and developers who will use this package.
```

---

### 📦 Prompt for `frontier/repository`

```
Analyze my codebase and create comprehensive documentation for this Laravel package.

This is the `frontier/repository` package - a companion package to `frontier/frontier` (Laravel Starter Kit) that provides the Repository pattern for database abstraction.

Please:
1. Analyze the entire package structure and code
2. Create an `AI_GUIDE.md` file in the package root with:
   - Package overview and purpose
   - Architecture diagram (Mermaid)
   - Core components and their responsibilities
   - Design patterns used (Repository, possibly Unit of Work, etc.)
   - Installation and usage instructions
   - Code examples showing:
     - How to create a Repository class
     - How to bind repositories to interfaces
     - Common repository methods (find, create, update, delete, etc.)
     - How to use repositories with dependency injection
     - Query scopes and custom methods
   - Use cases and best practices
   - When to use Repository pattern vs Eloquent directly
   - File reference table with links

3. Document the relationship to parent package `frontier/frontier`
4. Include extension/customization guide

Focus on making this documentation useful for both AI assistants and developers who will use this package.
```

---

### 📦 Prompt for `frontier/module`

```
Analyze my codebase and create comprehensive documentation for this Laravel package.

This is the `frontier/module` package - a companion package to `frontier/frontier` (Laravel Starter Kit) that provides modular application structure.

Please:
1. Analyze the entire package structure and code
2. Create an `AI_GUIDE.md` file in the package root with:
   - Package overview and purpose
   - Architecture diagram (Mermaid)
   - Core components and their responsibilities
   - Module structure convention (folders, namespacing, etc.)
   - Installation and usage instructions
   - Code examples showing:
     - How to create a new module
     - Module service provider setup
     - Module-specific routes, controllers, models
     - Inter-module communication patterns
     - How to register and load modules
   - Use cases and best practices
   - When to use modules vs traditional Laravel structure
   - File reference table with links

3. Document the relationship to parent package `frontier/frontier`
4. Include commands for scaffolding modules (if any)
5. Include extension/customization guide

Focus on making this documentation useful for both AI assistants and developers who will use this package.
```

---

## 📄 README.md Prompts

Use these prompts to create polished README.md files for each package.

### 📦 Prompt for Package README (Generic)

```
Analyze my package and create a professional README.md for GitHub/Packagist.

Please create a README.md that includes:

1. **Header Section**:
   - Package name with logo/emoji
   - One-line description
   - Badges (PHP version, Laravel version, license, tests)
   - Quick navigation links

2. **Features Section**:
   - Key features as a bullet list or table
   - What problems it solves

3. **Installation Section**:
   - Composer require command
   - Service provider auto-discovery note
   - Any post-install commands

4. **Quick Start Section**:
   - Minimal code example to get started
   - Show the most common use case

5. **Usage Section**:
   - 3-5 practical examples with code
   - Cover main features
   - Include controller integration examples

6. **Configuration Section** (if applicable):
   - How to publish config
   - Key configuration options

7. **Artisan Commands**:
   - Table of available commands
   - Example usage for each

8. **API Reference** (brief):
   - Link to full documentation
   - Main classes and methods overview

9. **Testing**:
   - How to run tests
   - How to test in your application

10. **Contributing**:
    - Guidelines
    - Link to contribution guide

11. **License & Author**:
    - MIT license
    - Author info with contact

Make the README visually appealing with:
- Emojis for section headers
- Code blocks with syntax highlighting
- Tables for structured information
- Mermaid diagrams where helpful
- Badges at the top

Keep it concise but comprehensive. A developer should be able to get started within 5 minutes of reading.
```

---

### 📦 Prompt for `frontier/action` README

```
Analyze the frontier/action package and create a professional README.md.

This package provides the Action pattern for Laravel - encapsulating business logic in single-purpose classes.

Key features to highlight:
- Static `exec()` method for easy invocation
- Dependency injection via Laravel container
- Pre-built Eloquent actions (Create, Update, Delete, Find, etc.)
- Artisan generator command

Include:
1. Installation (composer require frontier/action)
2. Quick example of creating and using an Action
3. Table of pre-built Eloquent actions with signatures
4. When to use Actions vs Services/Jobs
5. Testing example
6. Link to AI_GUIDE.md for detailed docs

Make it visually appealing with emojis, tables, and code examples.
Keep it under 300 lines - link to AI_GUIDE for details.
```

---

### 📦 Prompt for `frontier/repository` README

```
Analyze the frontier/repository package and create a professional README.md.

This package provides the Repository pattern for Laravel - abstracting database access behind a clean interface.

Key features to highlight:
- RepositoryEloquent with 20+ built-in methods
- Advanced query options (filters, scopes, joins, pagination)
- Pre-built Actions for repository operations
- Integration with frontier/action package
- Artisan generator commands

Include:
1. Installation (composer require frontier/repository)
2. Quick example of creating and using a Repository
3. Table of RepositoryEloquent methods
4. Advanced retrieve options example
5. Using with dependency injection
6. When to use Repository vs Eloquent directly
7. Link to AI_GUIDE.md for detailed docs

Make it visually appealing with emojis, tables, and code examples.
Keep it under 300 lines - link to AI_GUIDE for details.
```

---

### 📦 Prompt for `frontier/module` README

```
Analyze the frontier/module package and create a professional README.md.

This package provides modular architecture for Laravel - organizing large apps into self-contained modules.

Key features to highlight:
- Wraps internachi/modular for reliability
- Standard Laravel make:* commands with --module flag
- Auto-discovery of migrations, factories, policies, etc.
- Module-namespaced translations and Blade components
- Clean inter-module communication patterns

Include:
1. Installation (composer require frontier/module)
2. Quick example of creating a module
3. Module directory structure
4. Table of available artisan commands
5. Using make:* commands with --module
6. When to use modules vs traditional structure
7. Link to AI_GUIDE.md for detailed docs

Make it visually appealing with emojis, tables, and code examples.
Keep it under 300 lines - link to AI_GUIDE for details.
```

---

### 📦 Prompt for `frontier/frontier` README (Meta-package)

```
Analyze the frontier/frontier package and create a professional README.md.

This is the meta-package that provides an interactive installer for the Frontier ecosystem.

Key features to highlight:
- Interactive CLI installer using Laravel Prompts
- Installs selected companion packages (action, repository, module)
- Modular - choose only what you need
- Supports Laravel 10, 11, and 12

Include:
1. Hero section with package description
2. Ecosystem overview (table of all 4 packages)
3. Installation and running the installer
4. What each component provides (brief)
5. Quick start examples for each pattern
6. Architecture diagram (Mermaid)
7. When to use which packages (decision guide)
8. Links to individual package docs

This is the entry point for the ecosystem, so make it welcoming and comprehensive.
Include a decision matrix for which packages to use.
```

---

## 📋 After Generating Documentation

Once you have documentation in each package:

1. **Cross-link documents** - Ensure AI_GUIDE references README and vice versa
2. **Consistent styling** - Same emoji usage, table formats, code block languages
3. **Update main frontier/frontier** - Ensure it links to all companion docs
4. **Version info** - Update "Last updated" dates

---

## 🔄 Updating Documentation

When making changes to packages, use this prompt:

```
I've made changes to the [package-name] package. Please:
1. Review the changes
2. Update the relevant sections in AI_GUIDE.md and README.md
3. Ensure all code examples still work
4. Update the "Last updated" date
5. Check that file references are still accurate
```

---

*Generated for Frontier package ecosystem documentation - December 2024*
