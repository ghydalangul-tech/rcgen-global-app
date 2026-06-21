from fastapi import FastAPI

app = FastAPI( title="RCGEN API")
@app.get("/health")
async def health():
    return {"status":  "healthy"}
