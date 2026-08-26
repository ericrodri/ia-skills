## graphify

This project has a graphify knowledge graph at graphify-out/.

Rules:
- Before answering architecture or codebase questions, read graphify-out/GRAPH_REPORT.md for god nodes and community structure
- If graphify-out/wiki/index.md exists, navigate it instead of reading raw files
- For cross-module "how does X relate to Y" questions, prefer `graphify query "<question>"`, `graphify path "<A>" "<B>"`, or `graphify explain "<concept>"` over grep — these traverse the graph's EXTRACTED + INFERRED edges instead of scanning files
- After modifying code files in this session, run `python3 scripts/graphify_rebuild.py` to keep the graph current (AST-only, no API cost). Follow it with `graphify export html` if you want the visualization refreshed too.

**Never run `graphify update .` or `graphify watch .` on this repo.** Both scan the
whole directory, including `vendor/` and `node_modules/`. Doing so once turned a
160-node graph into 58.659 nodes and a 44 MB `graph.json`, and graphify stopped
emitting `graph.html` because it exceeded the 5.000-node visualization limit.
`scripts/graphify_rebuild.py` exists precisely to pin the corpus to project code —
edit the `DIRS` list there if the scope ever needs to change.
