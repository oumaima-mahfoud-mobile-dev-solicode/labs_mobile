---
name: software-engineering
description: General-purpose software engineering lifecycle runbook covering architecture planning, code design, refactoring, debugging, and testing across any programming language or technology stack.
---

# Software Engineering Skill

Use this skill when the user requests assistance with software development, including writing new code, debugging errors, refactoring existing implementations, reviewing architecture, or creating automated tests.

---

## 1. Core Principles

1. **Technology Agnostic**: Apply universal software craftsmanship principles (modularity, readability, separation of concerns, DRY) regardless of language or framework.
2. **Minimal & Surgical Changes**: Edit only what is necessary to solve the problem; preserve surrounding code style, indentation, and comments.
3. **Defensive Coding**: Validate inputs, handle unexpected errors gracefully, and avoid hardcoded assumptions.
4. **Zero Embedded Secrets**: Never place API keys, database passwords, or auth tokens directly in source files.

---

## 2. Engineering Lifecycle Workflow

### Phase 1: Plan & Architecture
1. **Analyze Existing Code**: Inspect existing files, configuration files, and project structure before proposing modifications.
2. **Clarify Constraints**: Identify runtime targets, target platforms, dependencies, and backward compatibility constraints.
3. **Design the Solution**: Break down complex tasks into small, testable milestones.

### Phase 2: Propose & Review
1. **Explain the Plan**: Summarize the logic and provide a clear overview of which files will be created or edited.
2. **Identify Breaking Changes**: Explicitly point out any API alterations, schema migrations, or signature adjustments.
3. **Obtain Approval for Consequential Operations**: Ask for user approval before modifying critical existing code, deleting files, or running heavy shell commands.

### Phase 3: Execute
1. **Implement Cleanly**: Write self-documenting code with clear variable and function names.
2. **Follow Idiomatic Conventions**: Match the conventions of the target language (e.g., PEP 8 for Python, camelCase for JavaScript/TypeScript, standard Go formatting).
3. **Preserve Documentation**: Keep relevant docstrings and inline explanatory comments intact.

### Phase 4: Verify & Test
1. **Syntax & Linting**: Run language-appropriate linters or compilers (e.g., `python -m py_compile`, `tsc --noEmit`, `eslint`).
2. **Execute Unit Tests**: Run test suites or add targeted test cases for new functionality.
3. **Runtime Sanity Check**: Ensure the application or script executes cleanly without warnings or unhandled exceptions.

---

## 3. Debugging Checklist

When diagnosing bugs or crashes:
- **Reproduce**: Identify the exact trigger, input, and stack trace.
- **Isolate**: Distinguish root cause from symptoms.
- **Hypothesize**: Formulate a clear hypothesis before making any code change.
- **Fix Minimally**: Fix the root cause with the smallest effective diff.
- **Verify**: Confirm that the bug is resolved and no regressions were introduced.
