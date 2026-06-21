from fastapi import FastAPI

app = FastAPI(title='RCGEN API')

@app.get('/')
async def root():
    return {'status': 'RCGEN Backend Running!'}

@app.get('/health')
async def health():
    return {'status': 'healthy'}
