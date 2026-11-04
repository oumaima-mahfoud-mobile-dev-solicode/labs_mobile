---
name: skill-creator
description: Framework and runbook for designing, reviewing, and refining reusable domain skills across technical, business, creative, analytical, and operational fields.
---

# Skill Creator Skill

Use this skill when designing new modular skills, reviewing and auditing existing skills, or standardizing workflows across any domain (e.g., technical engineering, business strategy, creative writing, data analysis, or operational runbooks) in `.agents/skills/`.

---

## 1. Core Principles

1. **Broad Domain Applicability**: Design skills for any discipline. Avoid programming-specific assumptions unless the domain specifically warrants them.
2. **Adaptable Frameworks, Not Rigid Formulas**: Treat workflows as adaptable structures tailored to the task type (e.g., step-by-step runbooks, iterative creative loops, decision trees, or audit checklists).
3. **Prevent Capability Duplication**: Always check existing workspace skills before authoring a new one. Extend or refine existing skills when scopes overlap.
4. **Deduplicate Global Rules**: Rely on [AGENTS.md](file:///c:/Users/Solicode/Desktop/antigravity/AGENTS.md) and [.agents/rules/](file:///c:/Users/Solicode/Desktop/antigravity/.agents/rules/) for universal guidelines (safety gates, explicit approvals, and secrets protection). Keep domain skills focused strictly on domain-specific execution.
5. **Concrete Verification Criteria**: Provide observable, objective standards to evaluate domain deliverables (e.g., rubrics, acceptance checklists, schema tests, or logical consistency audits).

---

## 2. Operational Modes

### Mode A: Drafting a New Skill
1. **Catalog Existing Capabilities**: Inspect `.agents/skills/` to verify that the requested capability does not already exist. If an existing skill overlaps substantially, propose enhancing that skill instead.
2. **Define Scope & Triggers**:
   - Determine specific user intents, tasks, or file types that trigger the skill.
   - Establish negative boundaries ("When NOT to use") to prevent false triggers or collisions.
3. **Identify Inputs & Prerequisites**: List required source files, context, constraints, or environment assumptions needed from the user.
4. **Design the Domain Workflow**: Adapt the general lifecycle (`Plan` → `Propose` → `Execute` → `Verify`) into domain-appropriate phases.
5. **Standardize Deliverables**: Define consistent structure and presentation formats for results.
6. **Formulate Verification Criteria**: Specify domain-relevant quality checks and acceptance criteria.

### Mode B: Reviewing an Existing Skill
1. **Structural Audit**: Verify YAML frontmatter syntax, naming match between folder and frontmatter `name`, and document sectioning.
2. **Boundary & Overlap Analysis**: Check whether triggers are too broad, too narrow, or in conflict with other skills.
3. **Actionability Check**: Ensure instructions provide actionable, practical domain guidance rather than generic advice or redundant global rules.
4. **Verification Evaluation**: Confirm that the skill includes concrete ways to validate domain deliverables.

### Mode C: Saving & Finalizing Changes
1. **Pre-Save Validation**: Run the drafted or revised skill through the **Quality Review Checklist** (Section 4).
2. **Propose and Await Approval**: Present the finalized draft to the user and obtain explicit approval before writing.
3. **Surgical Write**: Create or update only the target `.agents/skills/<skill-name>/SKILL.md` file without affecting unrelated workspace files.

---

## 3. Skill Anatomy & Structural Specifications

Every skill file must follow this standardized schema:

```yaml
---
name: [lowercase-hyphenated-name]
description: [Clear, concise summary of capability, scope, and target tasks]
---
```

1. **Title & Intent**: Clear title followed by a 1-2 sentence trigger summary.
2. **Applicability & Boundaries**:
   - **When to Use**: Specific tasks, user requests, or conditions.
   - **When NOT to Use**: Clear exclusions to route adjacent tasks elsewhere.
3. **Prerequisites & Inputs**: Necessary context, source materials, or user-supplied constraints.
4. **Workflow Framework**: Modular steps adapted to the domain's natural working pattern.
5. **Deliverable Formats**: Prescribed structures (e.g., matrices, summaries, schemas, diffs).
6. **Domain Verification Criteria**: Methods to objectively inspect and validate deliverables.
7. **Common Pitfalls & Edge Cases**: Domain-specific errors, anti-patterns, and recovery steps.

---

## 4. Pre-Publication Quality Checklist

Before proposing or saving a skill to `.agents/skills/<skill-name>/SKILL.md`, verify:

- [ ] **No Unnecessary Duplication**: Confirmed that no existing skill in `.agents/skills/` already covers this capability.
- [ ] **Folder & File Path**: Placed in `.agents/skills/<skill-name>/SKILL.md` where `<skill-name>` uses lowercase hyphenated casing.
- [ ] **Frontmatter Integrity**: Contains valid YAML frontmatter with `name` (matching the folder) and a concise, high-signal `description`.
- [ ] **Structural Prerequisite (No Discovery Guarantee)**: Frontmatter and file placement adhere to workspace conventions as a structural foundation (note: active availability depends on workspace configuration and agent runtime context).
- [ ] **Clear Trigger Boundaries**: Explicitly lists both when to use and when NOT to use.
- [ ] **Input Clarity**: Specifies prerequisites and context required before execution starts.
- [ ] **Adaptable Workflow**: Outlines a practical, domain-appropriate workflow rather than forcing an inflexible template.
- [ ] **Domain-Specific Verification**: Specifies observable criteria, checklists, or tests to validate work before completion.
- [ ] **Rule Deduplication**: Omits redundant global safety, approval, and privacy rules already enforced by [AGENTS.md](file:///c:/Users/Solicode/Desktop/antigravity/AGENTS.md).
- [ ] **Deliverable Standards**: Clarifies the expected format and quality standards of outputs.
