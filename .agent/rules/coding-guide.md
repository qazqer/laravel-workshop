---
trigger: always_on
---

# Coding Guide for Laravel Project

**Always use Laravel Boost MCP for accurate, version-specific guidance.**

## Essential Workflow

1. **Any task** -> application-info (PHP, Laravel, packages, models)
2. **Documentation** -> search-docs (never general knowledge)
3. **Database work** -> database-schema (before writing queries)
4. **Testing code** -> tinker (validate before suggesting)
5. **Quick refs** -> list-routes, get-config, last-error, list-artisan-commands

## Code Generation Rules

✅ Match installed versions (no deprecated syntax)  
✅ Type hints (PHP 8.0+) + PHPDoc comments  
✅ Follow PSR-12 standards  
✅ Validate with tinker before suggesting  
✅ Include error handling & security

❌ NO general knowledge or Stack Overflow without official docs verification

## Documentation Priority

1. Official Laravel docs (matching version)
2. Official package docs
3. Verified examples from official sources

## PHP Code Snippets Rule

**When providing PHP code snippets, you MUST include the opening tag <?php on the very first line of the code block, even if the snippet is short or partial. This is critical to ensure syntax highlighting renders update correctly.**

**Example:**

```php
<?php ...
```
