<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills50Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'WhatsApp Business y marketing conversacional: flujos que venden sin parecer spam',
                'description'       => 'Construye flujos de comunicación en WhatsApp Business que generan ventas, nurturan leads y fidelizan clientes sin activar el filtro de spam del usuario. Incluye la configuración de la cuenta, los templates de mensajes aprobados por Meta, la estructura de los flujos y las métricas de conversión.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en marketing conversacional y automatización de WhatsApp con experiencia implementando estrategias de WhatsApp Business API en e-commerce, educación y servicios financieros, donde las tasas de apertura del 90%+ de WhatsApp convierten el canal en el de mayor ROI cuando los flujos están bien diseñados y el contenido aporta valor real al usuario.

Contexto:
- Tipo de negocio: [e-commerce / SaaS / servicios / educación / retail / otro]
- Objetivo principal de WhatsApp: [captación de leads / nurturing / venta directa / soporte / recuperación de carrito]
- Base de contactos actual en WhatsApp: [número de contactos opt-in o "estamos empezando"]
- Herramienta de WhatsApp Business que usas o valoras: [WhatsApp Business App / WhatsApp Business API / Manychat / Wati / Treble / Brevo / otra]
- Principal duda o reto: [cómo conseguir opt-ins / qué mensajes enviar / cómo automatizar / cómo no parecer spam]

## Estrategia de WhatsApp Business — [Empresa]

### Los fundamentos: WhatsApp Business App vs. API

**Cuándo usar cada opción:**
```
WHATSAPP BUSINESS APP (gratuita):
→ Para negocios con <1.000 conversaciones al mes
→ 1 dispositivo, sin automatización avanzada
→ Catálogo de productos, respuestas rápidas, etiquetas de contacto
→ Mensajes masivos solo a través de "difusión" (límite de 256 contactos por lista)
→ Limitación crítica: la difusión solo llega a quien tiene tu número guardado

WHATSAPP BUSINESS API (de pago, vía proveedores):
→ Para negocios con >1.000 conversaciones al mes o automatización avanzada
→ Múltiples agentes, chatbot, integración con CRM
→ Mensajes proactivos a cualquier contacto opt-in (no requiere que te tengan guardado)
→ Templates aprobados por Meta para mensajes de notificación/marketing
→ Proveedores recomendados por presupuesto:
  <200€/mes: Brevo (antes Sendinblue), Wati
  200-500€/mes: Manychat, Respond.io
  >500€/mes: Treble, Zoko, SleekFlow

EL PRECIO DE LOS MENSAJES (WhatsApp Business API):
→ Meta cobra por conversación (no por mensaje) — una ventana de 24h
→ Conversaciones de marketing: ~0.08-0.12€ por conversación (España)
→ Conversaciones de servicio (iniciadas por el usuario): más baratas o gratuitas
→ Conversa dentro de la ventana de 24h sin coste adicional
```

---

### Cómo conseguir opt-ins de calidad sin violar las políticas de Meta

**Las 5 fuentes de opt-in más efectivas:**
```
FUENTE 1 — LINK DE WHATSAPP EN WEB Y LANDING PAGES:
→ Genera tu enlace: https://wa.me/34XXXXXXXXX?text=Hola%2C+quiero+información
→ Añade el botón en la web con mensaje preescrito que activa la conversación
→ Incluye un incentivo: "Escríbenos por WhatsApp y recibe [guía / descuento / respuesta en 2h]"

FUENTE 2 — CHECKBOX DE OPT-IN EN FORMULARIOS:
→ En formularios de compra, contacto o registro añade:
  "□ Acepto recibir notificaciones y ofertas por WhatsApp (no suscripciones de marketing masivo)"
→ La casilla debe ser sin marcar por defecto — es un requisito de Meta y del RGPD

FUENTE 3 — ANUNCIOS DE META CON CLIC A WHATSAPP:
→ Facebook/Instagram Ads con objetivo "conversación en WhatsApp"
→ El usuario hace clic en el anuncio → se abre WhatsApp con un mensaje preescrito
→ La conversación se inicia voluntariamente → opt-in implícito

FUENTE 4 — QR CODE EN MATERIALES FÍSICOS:
→ Ideal para negocios con presencia física: tiendas, eventos, packaging
→ QR → abre WhatsApp con mensaje de bienvenida predefinido

FUENTE 5 — FLUJO POST-COMPRA:
→ Tras la compra, el email de confirmación incluye: "Sigue el estado de tu pedido por WhatsApp"
→ El cliente hace clic → inicia la conversación → opt-in voluntario del cliente más comprometido

LO QUE NUNCA DEBES HACER:
❌ Importar contactos del móvil o de otras bases de datos sin opt-in explícito
❌ Enviar mensajes masivos sin template aprobado por Meta
❌ Añadir a alguien a grupos de WhatsApp sin su consentimiento previo
❌ Comprar bases de datos de números de WhatsApp (prohibido + ineficaz + daña el sender score)
```

---

### Los templates de WhatsApp: cómo crear mensajes que Meta aprueba

**Estructura de un template de marketing aprobado:**
```
Los templates deben enviarse a Meta para aprobación (24-48h).
Categorías disponibles:
→ MARKETING: ofertas, newsletters, promociones
→ UTILITY: notificaciones transaccionales, recordatorios, confirmaciones
→ AUTHENTICATION: OTP, verificación de cuenta

ESTRUCTURA CORRECTA DE UN TEMPLATE:
[ENCABEZADO opcional]: imagen, vídeo o texto en negrita (hasta 60 caracteres)
[CUERPO]: el mensaje principal (hasta 1.024 caracteres)
  → Usa variables para personalización: {{1}} = nombre, {{2}} = producto, etc.
[PIE opcional]: texto legal o información de opt-out
[BOTONES opcionales]: hasta 3 botones de tipo:
  → Llamada a la acción (URL o número de teléfono)
  → Respuesta rápida (el usuario selecciona una opción predefinida)

EJEMPLO DE TEMPLATE DE CARRITO ABANDONADO:
ENCABEZADO: "Tienes artículos esperándote 🛒"
CUERPO: "Hola {{1}}, dejaste {{2}} en tu carrito en [Empresa]. Aún están disponibles.
¿Te ayudo a completar tu pedido? Si tienes alguna duda, estoy aquí."
BOTONES:
[Completar pedido] → URL de la cesta
[Necesito ayuda] → respuesta rápida → abre conversación de soporte

RAZONES POR LAS QUE META RECHAZA TEMPLATES:
❌ Contenido que genera urgencia falsa: "¡ÚLTIMA HORA! ¡AHORA O NUNCA!"
❌ Palabras de spam: "GRATIS", "OFERTA EXCLUSIVA" sin contexto
❌ Mensajes sin personalización (los genéricos tienen peor tasa de aprobación)
❌ Templates sin botón de opt-out en mensajes de marketing masivo
```

---

### Los 5 flujos de WhatsApp con mayor ROI

**Flujo 1: Bienvenida + Cualificación de leads**
```
TRIGGER: El usuario envía el primer mensaje (desde anuncio, web o QR)

MENSAJE 1 (inmediato):
"¡Hola {{nombre}}! Soy [Nombre] de [Empresa]. ✨
Para ayudarte mejor: ¿qué estás buscando?
1️⃣ Información sobre [producto A]
2️⃣ Información sobre [producto B]
3️⃣ Hablar con un asesor"

→ Según respuesta → deriva al flujo específico del producto
→ Opción 3 → asigna a un agente humano en 5 minutos

MÉTRICAS OBJETIVO:
→ Tasa de respuesta al primer mensaje: >60%
→ Tasa de cualificación (llegan a la opción de producto): >40%
```

**Flujo 2: Secuencia de nurturing post-lead (5 días)**
```
DÍA 1 (T+2h tras opt-in): Mensaje de valor — recurso gratuito
"Hola {{nombre}}, gracias por tu interés. Como te prometí, aquí tienes [guía/descuento/enlace]
¿Hay algo en lo que pueda ayudarte ahora mismo?"

DÍA 3: Caso de éxito o social proof
"{{nombre}}, muchos clientes como tú consiguieron [resultado] con [producto].
Aquí te cuento cómo: [enlace]"
[BOTÓN: "Quiero saber más"] [BOTÓN: "No me interesa"]

DÍA 5: Oferta o llamada a la acción
"{{nombre}}, esta semana tenemos [oferta especial / sesión gratuita / demo].
¿Te interesa reservar un espacio?"
[BOTÓN: "Reservar ahora"] [BOTÓN: "No gracias"]

REGLA: Si el usuario en cualquier momento envía "STOP" o "No quiero más mensajes"
→ eliminar inmediatamente de todos los flujos → es obligatorio por las políticas de Meta y el RGPD
```

**Flujo 3: Recuperación de carrito abandonado**
```
TRIGGER: Carrito abandonado con número de WhatsApp conocido (integración con e-commerce)

T+1h: Recordatorio suave
"Hola {{nombre}}, vi que dejaste {{producto}} en tu carrito 🛒
¿Tienes alguna duda sobre el pedido? Estoy aquí para ayudarte."

T+24h (si no hubo interacción): Incentivo
"{{nombre}}, tu carrito aún está guardado 🙌
Hoy puedes completar tu pedido con un 10% de descuento: [código]
Válido hasta las 23:59h de hoy. [Botón: Ir a mi carrito]"

T+72h: Cierre
"{{nombre}}, ¿cambiaste de idea o necesitas algo?
El descuento de ayer ya no está disponible, pero puedo buscarte la mejor opción.
¿Qué te frenó para completar el pedido?"

Resultado esperado: 10-25% de recuperación de carritos con WhatsApp
(vs. 5-8% solo con email)
```

---

### KPIs del canal WhatsApp

| Métrica | Definición | Benchmark |
|---------|-----------|-----------|
| Tasa de apertura | % de mensajes abiertos / enviados | 85-95% |
| Tasa de respuesta | % de conversaciones donde el usuario responde | 30-50% |
| Tasa de conversión | % de conversaciones que terminan en compra | 5-15% (depende del nicho) |
| Opt-out rate | % de usuarios que se dan de baja por flujo | <3% (si supera el 5%, revisa el contenido) |
| Coste por conversación | Coste Meta + coste de plataforma / conversaciones | Varía por sector |
| Revenue por conversación | Facturación atribuida / conversaciones activas | Define el ROI del canal |
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir flujos de WhatsApp Business que generan ventas sin parecer spam',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Machine learning en producción: MLOps, model serving y monitorización de drift',
                'description'       => 'Implementa el pipeline de MLOps que mantiene los modelos de machine learning funcionando en producción: desde el serving del modelo hasta la detección del data drift y el retraining automático. Incluye las herramientas del stack, las métricas de monitorización y las estrategias de despliegue que minimizan el riesgo.',
                'prompt_content'    => <<<'PROMPT'
Eres un MLOps Engineer con experiencia desplegando y manteniendo modelos de machine learning en producción en sectores como fintech, salud y e-commerce, donde la diferencia entre un modelo que "funciona en el notebook" y uno que genera valor real en producción durante 12 meses es un pipeline de MLOps robusto que el equipo de data science puede operar sin depender del equipo de ingeniería para cada cambio.

Contexto:
- Tipo de modelo a desplegar: [clasificación / regresión / recomendación / NLP / visión / otro]
- Stack de ML del equipo: [Python + scikit-learn / TensorFlow / PyTorch / XGBoost / HuggingFace]
- Infraestructura cloud: [AWS / GCP / Azure / on-premise]
- Volumen de predicciones: [requests/segundo o requests/día]
- Estado actual: [modelo entrenado listo para producción / en producción sin monitorización / quiero mejorar el pipeline existente]

## Pipeline de MLOps — [Modelo / Proyecto]

### Los 4 problemas que matan los modelos en producción

```
PROBLEMA 1 — DATA DRIFT:
El modelo fue entrenado con datos de enero. En julio, el comportamiento del usuario cambió.
El modelo sigue prediciendo como si fuera enero → las predicciones son incorrectas.
Solución: monitorización continua de la distribución de los datos de entrada.

PROBLEMA 2 — CONCEPT DRIFT:
La relación entre features y target cambió (ej: el comportamiento de pago de clientes
cambió tras una crisis económica). El modelo no lo sabe.
Solución: monitorización de las métricas de negocio + retraining programado.

PROBLEMA 3 — TECHNICAL DEBT DE ML:
Los notebooks de entrenamiento no son reproducibles. No hay versionado de datos.
No sabes qué versión del modelo está en producción.
Solución: MLflow / DVC para tracking de experimentos y versionado.

PROBLEMA 4 — COLD START / LATENCIA:
El modelo tarda 3 segundos en predecir → inaceptable para tiempo real.
Solución: optimización del modelo + serving eficiente + caché de predicciones frecuentes.
```

---

### Arquitectura del pipeline de MLOps

**Los 5 componentes del pipeline:**

```
COMPONENTE 1 — EXPERIMENT TRACKING:
Herramienta: MLflow (open source) o Weights & Biases (W&B)

# Ejemplo con MLflow:
import mlflow

with mlflow.start_run():
    mlflow.log_param("max_depth", 6)
    mlflow.log_param("n_estimators", 100)
    mlflow.log_metric("accuracy", 0.87)
    mlflow.log_metric("f1_score", 0.84)
    mlflow.sklearn.log_model(model, "model")
    mlflow.log_artifact("feature_importance.png")

# Esto registra: parámetros, métricas, el modelo serializado y cualquier artefacto
# Puedes comparar experimentos en la UI de MLflow

COMPONENTE 2 — VERSIONADO DE DATOS:
Herramienta: DVC (Data Version Control) — integra con Git

# Trackea el dataset que usaste para entrenamiento:
dvc add data/training_dataset.csv
git add data/training_dataset.csv.dvc
git commit -m "Add training dataset v2.1"

# En 6 meses puedes reproducir exactamente el entrenamiento original:
dvc checkout data/training_dataset.csv  # restaura la versión que usaste

COMPONENTE 3 — MODEL REGISTRY:
Herramienta: MLflow Model Registry o SageMaker Model Registry

Estados del modelo en el registry:
None → Staging → Production → Archived

# Promover un modelo de staging a production:
client = mlflow.tracking.MlflowClient()
client.transition_model_version_stage(
    name="fraud_detection_model",
    version=3,
    stage="Production"
)

COMPONENTE 4 — MODEL SERVING:
Opciones por caso de uso:

TIEMPO REAL (latencia <100ms):
→ FastAPI + Docker: max control, mayor complejidad
→ BentoML: abstracción sobre FastAPI/Triton orientada a ML
→ Seldon Core: Kubernetes-native, para entornos enterprise

BATCH (predicciones en lote, no tiempo real):
→ Spark MLlib para transformaciones masivas
→ AWS Batch / GCP Dataflow / Azure Databricks

SERVERLESS (baja frecuencia, coste por uso):
→ AWS Lambda + SageMaker Endpoint / GCP Cloud Functions

COMPONENTE 5 — MONITORIZACIÓN (el más importante y más ignorado):
Herramientas: Evidently AI (open source) o Arize / WhyLabs (SaaS)
```

---

### Model Serving con FastAPI y Docker — el stack mínimo

**Estructura del proyecto de serving:**
```
ml-model-serving/
├── model/
│   ├── model.pkl          # modelo serializado con joblib/pickle
│   └── preprocessor.pkl   # el pipeline de preprocesamiento
├── app/
│   ├── main.py            # FastAPI app
│   ├── predict.py         # lógica de predicción
│   └── schemas.py         # Pydantic schemas para validación
├── Dockerfile
├── requirements.txt
└── docker-compose.yml
```

**El endpoint de predicción:**
```python
# app/main.py
from fastapi import FastAPI, HTTPException
import joblib
import numpy as np
from schemas import PredictionRequest, PredictionResponse
import time
import logging

app = FastAPI(title="Fraud Detection API", version="1.0")
logger = logging.getLogger(__name__)

# Cargar el modelo una sola vez al iniciar (no en cada request)
model = joblib.load("model/model.pkl")
preprocessor = joblib.load("model/preprocessor.pkl")

@app.post("/predict", response_model=PredictionResponse)
async def predict(request: PredictionRequest):
    start_time = time.time()
    try:
        # Preprocesar y predecir
        features = preprocessor.transform([request.features])
        prediction = model.predict(features)[0]
        proba = model.predict_proba(features)[0].max()

        latency_ms = (time.time() - start_time) * 1000
        logger.info(f"Prediction: {prediction}, confidence: {proba:.3f}, latency: {latency_ms:.1f}ms")

        # Log de las features para monitorización de drift
        log_prediction_for_monitoring(request.features, prediction, proba)

        return PredictionResponse(
            prediction=int(prediction),
            confidence=float(proba),
            model_version="v1.2.3"
        )
    except Exception as e:
        logger.error(f"Prediction error: {e}")
        raise HTTPException(status_code=500, detail="Prediction failed")

@app.get("/health")
async def health():
    return {"status": "healthy", "model_version": "v1.2.3"}
```

---

### Monitorización de drift con Evidently AI

**Las 3 métricas de drift que debes monitorizar:**

```python
# Generación del informe de drift semanal
from evidently.report import Report
from evidently.metric_preset import DataDriftPreset, ClassificationPreset
import pandas as pd

# Datos de referencia: los que usaste para entrenar
reference_data = pd.read_csv("data/training_data.csv")

# Datos de producción: las predicciones de la última semana
production_data = pd.read_csv("data/production_last_week.csv")

# REPORTE 1: Drift de los datos de entrada
data_drift_report = Report(metrics=[DataDriftPreset()])
data_drift_report.run(
    reference_data=reference_data,
    current_data=production_data
)
data_drift_report.save_html("reports/data_drift_weekly.html")

# REPORTE 2: Rendimiento del modelo (si tienes labels reales)
model_perf_report = Report(metrics=[ClassificationPreset()])
model_perf_report.run(
    reference_data=reference_data,
    current_data=production_data.dropna(subset=['target'])  # solo donde hay target real
)

# ALERTAS AUTOMÁTICAS:
# Si el drift score supera el umbral → Slack alert + ticket automático de retraining
```

**Los umbrales de alerta:**
```
DATA DRIFT (p-value del test estadístico):
→ p-value > 0.05: sin drift significativo → verde
→ 0.01 < p-value < 0.05: drift moderado → amarillo, investigar
→ p-value < 0.01: drift severo → rojo, retraining prioritario

RENDIMIENTO DEL MODELO EN PRODUCCIÓN:
→ Accuracy / F1 degradación < 5% respecto al baseline → verde
→ 5-10% de degradación → amarillo, evaluar retraining
→ >10% de degradación → rojo, rollback o retraining urgente
```

---

### El pipeline de retraining automático

```
ESTRATEGIA DE RETRAINING:
1. SCHEDULED (más común): reentrenar cada 2-4 semanas con datos recientes
2. TRIGGERED: reentrenar cuando el drift supera el umbral
3. HYBRID: scheduled + triggered para drift severo

PIPELINE DE RETRAINING CON GITHUB ACTIONS O AIRFLOW:
Paso 1: Extraer datos de producción de las últimas N semanas
Paso 2: Combinar con datos históricos de entrenamiento (balance histórico vs. reciente)
Paso 3: Entrenar el nuevo modelo con los mismos hiperparámetros validados
Paso 4: Comparar con el modelo en producción: ¿el nuevo es mejor?
  → SI mejor: promover a staging → smoke tests → promover a production
  → SI peor: mantener el modelo actual + alerta al equipo de data science
Paso 5: Registrar el nuevo modelo en MLflow Model Registry con sus métricas
Paso 6: Notificar al equipo del resultado del retraining

CANARY DEPLOYMENT (para reducir el riesgo):
→ Despliega el nuevo modelo al 10% del tráfico
→ Monitoriza métricas durante 24h
→ Si el comportamiento es igual o mejor → 100% del tráfico
→ Si hay regresión → rollback automático al modelo anterior
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Implementar MLOps para llevar modelos de ML a producción y mantenerlos funcionando',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Investigación con usuarios: entrevistas, tests de usabilidad e insights que cambian decisiones de diseño',
                'description'       => 'Diseña y ejecuta investigaciones de usuarios que producen insights accionables: desde la planificación del estudio hasta la síntesis de hallazgos que cambian las decisiones de diseño y producto. Incluye los scripts de entrevista, la guía de test de usabilidad y el método de síntesis para equipos con poco tiempo.',
                'prompt_content'    => <<<'PROMPT'
Eres una UX researcher con experiencia liderando programas de investigación en empresas de producto digital donde la investigación de usuarios ha pasado de ser un "nice to have" a la fuente de inteligencia que evita meses de desarrollo en la dirección equivocada. Has diseñado estudios cualitativos y cuantitativos, moderado más de 500 sesiones con usuarios y desarrollado sistemas de síntesis que hacen que los insights lleguen al equipo de manera rápida y accionable.

Contexto:
- Tipo de producto a investigar: [app móvil / web app / plataforma B2B / e-commerce / otro]
- Pregunta de investigación principal: [qué problema de diseño o decisión de producto necesitas responder]
- Tiempo disponible para el estudio: [1 semana / 2 semanas / 1 mes]
- Equipo de investigación: [solo tú / tú + PM / tú + diseñador]
- Presupuesto para participantes: [0€ / <500€ / <2.000€]

## Investigación con Usuarios — [Producto / Pregunta de investigación]

### Elegir el método correcto según la pregunta

**El árbol de decisión de métodos de investigación:**
```
¿QUIERES ENTENDER EL "POR QUÉ"? → Investigación CUALITATIVA
→ Entrevistas en profundidad (1:1, 45-60 min)
→ Tests de usabilidad moderados
→ Shadowing / guerrilla research
→ Diarios de uso

¿QUIERES MEDIR FRECUENCIAS O VALIDAR HIPÓTESIS? → Investigación CUANTITATIVA
→ Encuestas (mínimo 100 respuestas para ser estadísticamente relevante)
→ A/B testing
→ Analytics de comportamiento (Mixpanel, Hotjar, GA4)

¿QUIERES EXPLORAR O CONFIRMAR?
Explorar (no sé bien el problema): entrevistas de descubrimiento
Confirmar (tengo una hipótesis): test de usabilidad o A/B test

PARA LA MAYORÍA DE DECISIONES DE DISEÑO:
El método más efectivo por coste/beneficio = Test de usabilidad con 5 usuarios moderado
(descubre el 85% de los problemas de usabilidad con un tiempo de ejecución de 1-2 días)
```

---

### Script de entrevista de usuario — el método más infrautilizado

**Principios de una buena entrevista:**
```
REGLA 1 — SIEMPRE SOBRE EL PASADO, NUNCA SOBRE EL FUTURO:
❌ "¿Usarías esta funcionalidad?"
→ Los usuarios son mal predictor de su propio comportamiento futuro

✅ "¿Cuéntame la última vez que intentaste [hacer la tarea que tu producto resuelve]?"
→ El comportamiento pasado es el mejor predictor del futuro

REGLA 2 — HECHOS, NO OPINIONES:
❌ "¿Qué piensas del proceso de onboarding?"
→ Te dan lo que creen que quieres escuchar

✅ "¿Cuéntame qué hiciste la primera vez que abriste la app? ¿Qué pasó después?"
→ La narrativa del comportamiento real revela los problemas de verdad

REGLA 3 — EL SILENCIO ES TU ALIADO:
→ Después de una respuesta, espera 3-5 segundos antes de la siguiente pregunta
→ El usuario suele añadir la información más relevante en ese silencio
→ Los investigadores novatos llenan el silencio con preguntas → interrumpen el flujo

REGLA 4 — SIGUE LOS HILOS QUE IMPORTAN:
→ El script es una guía, no una partitura
→ Si el usuario menciona algo inesperado pero relevante → explóralo antes de seguir el script
→ "Esto que mencionas de [X] es interesante. ¿Puedes contarme más sobre eso?"
```

**Script de entrevista de descubrimiento (60 min):**
```
APERTURA (5 min):
"Gracias por tu tiempo. Quiero que sepas que no estamos evaluando tus habilidades —
estamos aprendiendo sobre [el problema que investigas]. No hay respuestas incorrectas.
¿Puedo grabar la sesión solo para uso interno del equipo? [Obtener permiso]"

CONTEXTO DEL USUARIO (10 min):
"Para empezar, ¿puedes contarme un poco sobre tu trabajo/vida en relación a [el dominio]?"
→ ¿Cuál es tu rol? ¿Qué es lo que más tiempo te lleva en tu día a día?
→ ¿Qué herramientas usas actualmente para [la tarea que investigas]?
→ ¿Cómo empezaste a usar [herramienta/proceso actual]?

EXPLORACIÓN DEL COMPORTAMIENTO (30 min):
"Cuéntame de la última vez que tuviste que [hacer la tarea central del producto]."
→ ¿Cómo empezó? ¿Qué hiciste primero?
→ ¿Qué fue lo más difícil de ese proceso?
→ "¿Cómo resolviste eso?" (por cada problema mencionado)
→ ¿Qué herramienta o método usaste?
→ ¿Hay algo que hayas probado que no funcionó?

MOMENTO DE MAYOR FRUSTRACIÓN:
"En todo ese proceso, ¿cuál fue el momento donde te sentiste más frustrado o atascado?"
→ "¿Puedes describir exactamente qué pasó en ese momento?"
→ "¿Con qué frecuencia ocurre eso?"

CIERRE (10 min):
"¿Hay algo sobre [el dominio] que no te haya preguntado y que crees que debería saber?"
"Si tuvieras una varita mágica para cambiar algo de [el proceso/herramienta], ¿qué cambiarías?"
→ Esta última pregunta puede revelar deseos que no articularían de otra forma
"Gracias. ¿Habría alguien más que conoces que enfrente este problema y al que pudiera entrevistar?"
→ El snowball sampling te da los próximos entrevistados de calidad
```

---

### Test de usabilidad moderado: la guía en 5 pasos

**Paso 1: El guión de tareas (no el script de entrevista)**
```
PRINCIPIOS DE LAS TAREAS:
→ Deben ser tareas reales que el usuario haría en el producto
→ No mencionar los elementos de UI que deben encontrar (eso sería la respuesta)
→ Formular como un escenario, no como una instrucción de navegación

INCORRECTO (instrucción de navegación):
"Haz clic en el menú de perfil y cambia tu contraseña."

CORRECTO (escenario):
"Imagina que alguien ha intentado acceder a tu cuenta. ¿Qué harías para asegurarte
de que solo tú puedes acceder?"

ESTRUCTURA DE LA SESIÓN DE TEST:
[0-5 min] Bienvenida + permiso de grabación + pensar en voz alta
[5-10 min] Preguntas contextuales (quién eres, cómo usarías este tipo de producto)
[10-50 min] Realización de 3-5 tareas con observación silenciosa
[50-60 min] Reflexión general + preguntas adicionales
```

**Paso 2: La moderación durante las tareas**
```
TU MISIÓN: observar, no enseñar.
→ Si el usuario se atasca: "¿Qué esperarías que pasara si haces eso?"
→ NO señales qué botón tiene que pulsar — estás observando el problema de diseño
→ Recuérdale pensar en voz alta si se queda en silencio: "¿Qué estás pensando ahora?"

CUANDO EL USUARIO SE RINDE (no encuentra algo):
→ Deja que lo intente durante 1-2 minutos antes de intervenir
→ "¿Qué esperarías encontrar para hacer esto?" → insight sobre el modelo mental del usuario
→ Solo si es necesario: "Para continuar, [la solución]" + nota el tiempo que tardó en el task log
```

**Paso 3: Síntesis en 3 horas — el método para equipos con poco tiempo**
```
MÉTODO "RAINBOW SPREADSHEET":
1. Crea una hoja con: cada tarea como columna + cada participante como fila
2. En cada celda: nota si el usuario completó la tarea (✅) o falló (❌) y el comentario clave
3. La visualización hace inmediatamente obvio qué tareas fallan para todos los usuarios

AGRUPACIÓN DE OBSERVACIONES POR TEMAS:
→ Escribe cada observación en un post-it (digital o físico)
→ Agrupa los post-its por tema emergente
→ Los temas con más post-its = los problemas más frecuentes y graves

LAS 3 PREGUNTAS QUE CONVIERTEN LOS HALLAZGOS EN DECISIONES:
1. ¿Qué esperaban los usuarios que NO encontraron?
2. ¿Dónde se perdieron o tomaron el camino equivocado?
3. ¿Qué les causó confusión aunque completaron la tarea?
```

---

### El informe de investigación que el equipo realmente lee

**Estructura del informe en 1 página:**
```
═══════════════════════════════════════════════════════
RESEARCH BRIEF — [Pregunta de investigación]
Método: [entrevistas / test de usabilidad] | Participantes: X | Fecha: [fecha]
═══════════════════════════════════════════════════════

HALLAZGOS PRINCIPALES:

HALLAZGO 1 — [Título descriptivo del problema]
Evidencia: "Cita directa del usuario que ilustra el problema" — Usuario 3
Frecuencia: 4 de 5 usuarios
Implicación de diseño: [qué cambiar o investigar más]

HALLAZGO 2 — [Título]
...

RECOMENDACIONES PRIORIZADAS:
Alta prioridad (resolver antes del siguiente release):
□ [Cambio concreto] → resuelve el hallazgo X

Media prioridad (próximo sprint):
□ [Cambio concreto]

Para investigación futura:
□ [Pregunta que quedó abierta y merece un nuevo estudio]
═══════════════════════════════════════════════════════
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificar y ejecutar investigaciones con usuarios que producen insights accionables',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Métricas de ventas que importan: KPIs que revelan la salud real del proceso comercial',
                'description'       => 'Identifica y analiza los KPIs de ventas que revelan problemas reales en el proceso comercial antes de que se conviertan en una crisis de revenue: más allá del revenue y las cuotas, los ratios de conversión por etapa, la velocidad del pipeline y las métricas de actividad que predicen el resultado futuro.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP de Ventas con experiencia gestionando equipos comerciales en empresas SaaS y de servicios B2B de 5M€ a 50M€ ARR, donde has desarrollado dashboards de métricas que permiten identificar en tiempo real si el equipo va a alcanzar el objetivo del trimestre o si hay una crisis en el pipeline que resolver 6-8 semanas antes de que se manifieste en el revenue.

Contexto:
- Tipo de proceso de ventas: [inside sales / field sales / PLG (product-led growth) / channel]
- Ciclo de venta medio: [días]
- Tamaño del equipo comercial: [número de AEs / SDRs / CSMs]
- CRM utilizado: [Salesforce / HubSpot / Pipedrive / otro]
- Principal problema con las métricas actuales: [solo medimos revenue / los datos del CRM no son fiables / no sabemos qué métricas mirar / vemos los problemas demasiado tarde]

## Dashboard de Métricas de Ventas — [Empresa]

### Los 3 tipos de métricas y por qué necesitas los tres

```
MÉTRICAS DE ACTIVIDAD (leading indicators — lo que el equipo hace):
→ Predice los resultados futuros
→ Ejemplos: llamadas realizadas, emails enviados, demos realizadas, propuestas enviadas
→ Las puedes medir hoy y cambiar mañana
→ El problema: alta actividad no garantiza buenos resultados si la calidad es baja

MÉTRICAS DE PIPELINE (leading indicators — estado del embudo):
→ Reflejan el estado de las oportunidades en curso
→ Ejemplos: pipeline total, conversión por etapa, velocidad del ciclo, pipeline coverage
→ Las puedes medir hoy y predicen el revenue de las próximas 4-12 semanas
→ El problema: requieren datos de CRM fiables y actualizados

MÉTRICAS DE RESULTADO (lagging indicators — lo que el equipo consigue):
→ Reflejan el resultado del trabajo pasado
→ Ejemplos: revenue cerrado, cuota alcanzada, ARR nuevo, ACV medio
→ Cuando las ves es tarde para corregir el trimestre — solo para aprender de él
→ El problema: son las que más se miran, pero son las menos accionables a corto plazo
```

---

### El dashboard de métricas: qué medir y con qué frecuencia

**Métricas diarias (el pulso del equipo):**
```
ACTIVIDADES SDR/BDR:
→ Llamadas de prospección / día / rep (benchmark: 40-60 llamadas/día inside sales)
→ Emails de prospección / día / rep (benchmark: 30-50 personalizados/día)
→ Conversaciones de descubrimiento calificadas / día / rep (benchmark: 4-8)
→ Reuniones de demo reservadas / semana / rep (benchmark: 8-12 para SDR activo)

ACTIVIDADES AE:
→ Demos realizadas / semana / AE
→ Propuestas enviadas / semana / AE
→ Follow-ups de oportunidades activas realizados / día

SEÑAL DE ALERTA:
Si la actividad cae >30% respecto a la semana anterior → investigar antes de que afecte al pipeline
```

**Métricas semanales (la salud del pipeline):**
```
PIPELINE COVERAGE:
Pipeline total en el CRM / objetivo de cierre del trimestre = X veces de cobertura

Regla general: necesitas 3x de cobertura para alcanzar el objetivo
→ Si el objetivo es 500k€ y el pipeline tiene 1.5M€ → cobertura de 3x → saludable
→ Si el pipeline tiene 800k€ → cobertura de 1.6x → en riesgo, acelerar prospección

CONVERSIÓN POR ETAPA DEL EMBUDO:
| Etapa               | Oportunidades | Conversión a siguiente | Benchmark |
|---------------------|---------------|----------------------|-----------|
| MQL → SQL           | 100 leads     | 40% → 40 SQLs        | 30-50%    |
| SQL → Discovery     | 40 SQLs       | 70% → 28 meetings    | 60-80%    |
| Discovery → Demo    | 28 meetings   | 60% → 17 demos       | 50-70%    |
| Demo → Propuesta    | 17 demos      | 60% → 10 propuestas  | 50-70%    |
| Propuesta → Cerrado | 10 propuestas | 30% → 3 closed won   | 20-35%    |

→ Si una etapa tiene conversión muy baja vs. el benchmark → ahí está el problema
→ Ejemplo: Discovery → Demo al 30% → el ICP o el proceso de discovery falla

VELOCIDAD DEL PIPELINE (Sales Velocity):
Sales Velocity = (Número de oportunidades × ACV medio × Win rate) / Ciclo de venta en días
→ Aumenta el número de oportunidades → aumenta la velocidad
→ Aumenta el win rate → aumenta la velocidad
→ Aumenta el ACV → aumenta la velocidad
→ Reduce el ciclo → aumenta la velocidad
→ Optimiza el que es más fácil de mejorar en tu contexto actual
```

**Métricas mensuales (salud del equipo y el negocio):**
```
CUOTA DE CADA REP:
→ % de cuota alcanzada vs. objetivo mensual/trimestral
→ % de reps que alcanzan la cuota (objetivo: 60-70% del equipo alcanza el 100%)
→ Si <40% alcanza la cuota → el problema puede ser: cuotas mal calibradas, pipeline insuficiente, o proceso roto

AVERAGE CONTRACT VALUE (ACV):
→ ¿El ACV sube o baja? ¿Hay dispersión entre reps?
→ Si un rep tiene ACV consistentemente más alto → aprende de su proceso de calificación
→ Si el ACV baja trimestre a trimestre → posible presión de precios o bajada del ICP

WIN RATE:
Win rate = Oportunidades cerradas ganadas / (Cerradas ganadas + Cerradas perdidas)
→ Benchmark SaaS B2B: 20-30% del pipeline calificado
→ Si es muy alto (>50%) → el pipeline está infra-calificado: entran pocas oportunidades pero todas son fáciles
→ Si es muy bajo (<15%) → problema de ICP, de propuesta de valor o de proceso

RAZONES DE PÉRDIDA:
→ Categoriza cada deal perdido: precio / competidor / timing / presupuesto / no fit / stasis
→ "Stasis" (no tomaron decisión) suele ser la categoría más subestimada
→ Si >30% de las pérdidas son "stasis" → problema de creación de urgencia y de qualification
```

---

### El forecast de ventas: predecir con rigor

**Los 4 métodos de forecast (de menos a más riguroso):**
```
MÉTODO 1 — INTUICIÓN DEL REP (el más común, el menos fiable):
"Creo que cerraré estos 5 deals este mes" → sin datos que lo respalden
→ Los reps tienden al optimismo: suelen cumplir el 60-70% de lo que forecasstean

MÉTODO 2 — STAGE-BASED FORECAST:
→ A cada etapa del embudo se le asigna un % de probabilidad de cierre
→ Etapa 1: 10% / Etapa 2: 25% / Etapa 3: 50% / Etapa 4: 75% / Propuesta enviada: 90%
→ El pipeline ponderado = Σ (importe × probabilidad)
→ Más riguroso que la intuición, pero las probabilidades son genéricas

MÉTODO 3 — HISTORICAL WIN RATE BY STAGE:
→ Usa los datos reales del CRM de los últimos 12 meses
→ "Las oportunidades que llegan a Demo tienen un win rate real del 27%"
→ Aplica esos win rates reales a tu pipeline actual para el forecast

MÉTODO 4 — MULTIVARIABLE (el más riguroso):
→ Combina: etapa + tiempo en la etapa + engagement del cliente + ICP fit
→ Herramientas: Clari, Gong Forecast, Salesforce Einstein Forecasting
→ Solo tiene sentido para equipos >10 reps con datos de CRM limpios

REGLA DE ORO DEL FORECAST:
El mejor forecast es el que el equipo usa y cree en él.
Un método sofisticado que nadie actualiza es peor que un método simple bien ejecutado.
```

---

### Template de reunión de pipeline review semanal

```
AGENDA (45 minutos):
[0-10] Métricas de actividad de la semana vs. objetivo
        → ¿Qué está por debajo? ¿Por qué?

[10-25] Review de las oportunidades del forecast del trimestre:
        Para cada deal del forecast:
        → ¿Cuál es el siguiente paso concreto y cuándo?
        → ¿El Economic Buyer está comprometido?
        → ¿Hay algún bloqueante que necesite escalación?
        → ¿Aún está en el forecast o sale?

[25-35] Pipeline de nueva entrada esta semana:
        → ¿Cuántas oportunidades nuevas entraron? ¿Cuál es su calidad?
        → ¿Están cubriendo el gap del forecast?

[35-45] Acciones de la semana siguiente:
        → ¿Qué necesita el rep del manager para avanzar los deals clave?
        → Compromisos concretos con fecha

NORMAS DE LA PIPELINE REVIEW:
→ Los reps actualizan el CRM el día anterior — si el CRM no está actualizado, el deal no se revisa
→ La reunión no es para reportar el pasado, es para planificar el futuro de cada deal
→ El manager hace preguntas, no da respuestas — el rep debe generar la estrategia
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Medir la salud real del proceso de ventas con KPIs que predicen el resultado',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Continuous discovery: el sistema de investigación semanal que conecta al equipo con los usuarios',
                'description'       => 'Implementa el sistema de Continuous Discovery del libro de Teresa Torres para mantener al equipo de producto conectado con los problemas reales de los usuarios de forma semanal y sostenible. Incluye el proceso de reclutamiento de participantes, el format de las entrevistas y cómo convertir las conversaciones en decisiones de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia implementando Continuous Discovery Habits (el framework de Teresa Torres) en equipos de producto de empresas SaaS, donde el cambio de "hacemos investigación de usuarios cuando hay presupuesto" a "hablamos con al menos 1 usuario por semana" transforma la calidad de las decisiones de producto sin necesitar un equipo de research dedicado.

Contexto:
- Tipo de producto: [SaaS B2B / consumer app / plataforma / otro]
- Tamaño del equipo de producto: [PM + diseñadores + devs]
- Frecuencia actual de contacto con usuarios: [nunca / solo en lanzamientos / mensual / ya hacemos entrevistas]
- Obstáculo principal: [no tenemos tiempo / no sabemos cómo reclutar / no sabemos qué preguntar / los insights no llegan al equipo de desarrollo]
- Objetivo del discovery: [validar hipótesis de producto / explorar nuevas necesidades / evaluar decisiones de diseño]

## Sistema de Continuous Discovery — [Producto]

### El principio fundamental: por qué "continuo" cambia todo

**La diferencia entre research esporádico y discovery continuo:**
```
RESEARCH ESPORÁDICO (cómo lo hace la mayoría):
→ "Vamos a hacer research del onboarding" → proyecto de 3 semanas → informe de 20 páginas
→ El informe queda en un Google Drive que nadie vuelve a leer
→ Las decisiones del día a día se toman sin contacto con usuarios
→ Cuando hay un problema urgente → no hay datos recientes → se decide por intuición

CONTINUOUS DISCOVERY (el cambio de paradigma):
→ El equipo habla con al menos 1 usuario por semana, siempre
→ No es un proyecto — es un hábito del equipo
→ Los insights están frescos y llegan directamente a las decisiones del sprint
→ El equipo acumula intuición calibrada por contacto real con el problema

TERESA TORRES (Continuous Discovery Habits): "La investigación no debe ser un evento especial,
debe ser el método de trabajo del equipo de producto."
```

---

### Sistema de reclutamiento continuo: el mayor obstáculo resuelto

**El automático de reclutamiento semanal:**
```
EL PROBLEMA: El mayor obstáculo para hacer discovery continuo no es el tiempo
para las entrevistas — es el tiempo para encontrar y coordinar a los participantes.

LA SOLUCIÓN: Un sistema de reclutamiento que funciona solo.

PASO 1 — PANEL DE PARTICIPANTES:
→ Crea una base de datos de 50-100 usuarios dispuestos a hablar contigo
→ Fuentes: clientes actuales, usuarios registrados, leads calificados
→ Herramienta: hoja de cálculo simple con nombre, empresa, segmento, disponibilidad, fecha última entrevista

PASO 2 — OPT-IN AUTOMATIZADO:
→ Añade al onboarding o al email de bienvenida:
  "¿Te gustaría ayudar a mejorar [producto]? Buscamos usuarios que quieran
  compartir su experiencia en llamadas de 20 minutos cada 2-3 semanas.
  [Botón: Me apunto]"
→ El usuario que dice sí → entra al panel automáticamente

PASO 3 — INVITACIÓN SEMANAL AUTOMATIZADA:
→ Cada semana, envía un email a 5-8 personas del panel con un enlace a Calendly
→ Calendly bloquea automáticamente cuando alguien reserva
→ Reservan 1-2 → tienes la entrevista de la semana sin trabajo manual

HERRAMIENTAS:
→ Calendly o Cal.com para la reserva automática
→ Zapier: panel (Airtable) → email semanal automático a X personas del panel → si reservan → añadir al calendario
→ Respondent.io o User Interviews para reclutamiento de perfiles que no tienes en tu base de datos
```

---

### La entrevista de discovery en 30 minutos

**Principio: no es un test de usabilidad, no es una encuesta**
```
UNA ENTREVISTA DE DISCOVERY EXPLORA:
→ Los problemas y necesidades del usuario en su contexto real
→ El proceso que siguen actualmente (el cómo)
→ Las frustraciones y los workarounds que han desarrollado
→ Los objetivos que intentan alcanzar (el por qué)

UNA ENTREVISTA DE DISCOVERY NO ES:
❌ Una sesión para validar tu solución
❌ Una oportunidad para presentar el roadmap
❌ Una encuesta sobre satisfacción con el producto
```

**Guión de 30 minutos:**
```
[0-3 min] APERTURA:
"Gracias por tu tiempo. El objetivo de esta conversación es aprender sobre cómo [trabajas con X],
no sobre nuestro producto. No voy a mostrarte nada ni pedirte tu opinión sobre nada concreto —
simplemente quiero entender tu contexto. ¿Podemos grabar la sesión solo para notas internas?"

[3-8 min] CONTEXTO DEL USUARIO:
"¿Puedes contarme brevemente qué haces en tu rol y cómo [el problema que investigas]
encaja en tu día a día?"
→ Objetivo: entender quién es y su contexto de uso

[8-25 min] EXPLORACIÓN DEL COMPORTAMIENTO:
"¿Puedes contarme de la última vez que [hiciste la tarea central que tu producto podría resolver]?"
→ Sigue el relato con: "¿Y qué pasó después?" / "¿Cómo resolviste eso?" / "¿Con qué frecuencia ocurre?"
→ Cuando menciona un workaround o un punto de fricción → PROFUNDIZA SIEMPRE
  "Eso que describes de [X] suena interesante. ¿Puedes contarme más sobre cómo lo gestionas?"

[25-28 min] PREGUNTAS DE CIERRE:
"¿Hay algo sobre [el dominio] que crees que debería saber y no te he preguntado?"
"Si pudiera cambiar una cosa sobre cómo manejas [el proceso], ¿qué cambiarías?"

[28-30 min] REFERRALS:
"¿Conoces a alguien más que tenga este tipo de trabajo y que pudiera tener perspectivas interesantes?"
→ Los mejores participantes vienen referidos por participantes anteriores
```

---

### El sistema de síntesis: de conversaciones a oportunidades

**El Opportunity Solution Tree de Teresa Torres:**
```
NIVEL 1 — OUTCOME (objetivo de negocio medible):
El resultado que el equipo debe conseguir este trimestre
Ejemplo: "Aumentar la retención de usuarios en el primer mes del 40% al 60%"

NIVEL 2 — OPPORTUNITIES (problemas/necesidades de los usuarios):
Los problemas reales que los usuarios mencionan en las entrevistas
Ejemplo: "Los usuarios no entienden qué valor obtienen en la primera semana"
Ejemplo: "El proceso de configuración inicial es demasiado largo y los usuarios lo abandonan"

NIVEL 3 — SOLUTIONS (cómo podríamos resolverlos):
Las ideas de solución del equipo para las oportunidades identificadas
Ejemplo: "Tour guiado de configuración en <5 pasos"
Ejemplo: "Email de activación en el día 3 con la primera acción de valor personalizada"

NIVEL 4 — EXPERIMENTS (cómo validamos las soluciones):
Los experimentos más pequeños posibles para aprender si la solución funciona
Ejemplo: "Smoke test de landing page describiendo el nuevo onboarding para medir interés"

PROCESO SEMANAL:
→ Tras la entrevista: el PM añade las nuevas oportunidades al árbol
→ En la reunión semanal del equipo (30 min): review del árbol y decisión de qué oportunidad priorizar
→ El equipo nunca trabaja en una solución sin que haya una oportunidad clara detrás
```

**El formato de nota de entrevista que facilita la síntesis:**
```
NOTA DE ENTREVISTA — [Nombre anonimizado] — [Fecha]
Segmento: [tipo de usuario] | Empresa: [tipo/tamaño]

CITAS CLAVE (textual, entre comillas):
"Siempre que necesito [X], tengo que [workaround complicado]" — frustración clara
"Lo que más me cuesta es entender si [métrica] es buena o mala para mí"

COMPORTAMIENTOS OBSERVADOS:
→ Usa una hoja de Excel en paralelo porque el producto no tiene [función]
→ Evita la función X porque le parece confusa

OPORTUNIDADES IDENTIFICADAS:
→ [Problema 1]: menciona que no puede [hacer X] fácilmente
→ [Problema 2]: no entiende [concepto Y] sin ayuda externa

HIPÓTESIS PARA VALIDAR:
→ Si resolvemos [problema 1], ¿aumentaría su frecuencia de uso?
```

---

### Métricas del sistema de Continuous Discovery

```
HEALTH METRICS DEL PROCESO:
→ Entrevistas realizadas / semana: objetivo ≥1 por semana de forma consistente
→ % de semanas con al menos 1 entrevista (en los últimos 3 meses): objetivo >80%
→ Número de participantes únicos en el panel activo: objetivo >30 contactos rotatorios
→ Tiempo desde que surge una pregunta hasta que hay datos de usuarios que la responden:
   objetivo <2 semanas (antes vs. después de implementar el sistema)

CALIDAD DE LOS INSIGHTS:
→ ¿Las decisiones del equipo referencian observaciones de usuarios? (antes: nunca / ahora: siempre)
→ ¿Cuántas oportunidades del Opportunity Solution Tree vienen de entrevistas vs. de intuición del equipo?
   Objetivo: >70% de las oportunidades del árbol tienen ≥2 menciones de usuarios
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar un sistema de investigación continua con usuarios que guía las decisiones de producto',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Offboarding de empleados: el proceso de salida que protege la empresa y cierra bien la relación',
                'description'       => 'Diseña un proceso de offboarding que proteja a la empresa —devolución de accesos, transferencia de conocimiento, cumplimiento legal—, preserve la relación con el empleado que se va y extraiga los insights que mejoran la retención del equipo que se queda. Incluye el checklist completo, la entrevista de salida y el protocolo de comunicación.',
                'prompt_content'    => <<<'PROMPT'
Eres una Business Partner de RRHH con experiencia gestionando offboardings en empresas tecnológicas de 20 a 500 empleados, desde salidas voluntarias planificadas hasta terminaciones sorpresivas y colectivas, donde la forma en que una empresa gestiona la salida de sus empleados define su reputación en el mercado de talento tanto como su proceso de contratación.

Contexto:
- Tipo de empresa y tamaño: [número de empleados / sector]
- Tipo de salida a gestionar: [renuncia voluntaria / despido / fin de contrato / ERTE / jubilación]
- Herramientas de HR disponibles: [HRIS: Factorial / BambooHR / Workday / otro]
- Áreas de mayor riesgo identificadas: [accesos a sistemas / conocimiento no documentado / relaciones con clientes / propiedad intelectual]
- Objetivo: [proceso más organizado / protección legal / mejorar datos de retención / gestionar salida de persona clave]

## Proceso de Offboarding — [Empresa]

### Los 3 objetivos del offboarding bien hecho

```
OBJETIVO 1 — PROTECCIÓN DE LA EMPRESA:
→ Revocar todos los accesos a sistemas y datos
→ Recuperar activos (equipos, credenciales, documentación confidencial)
→ Cumplir las obligaciones legales y contractuales
→ Proteger las relaciones con clientes que manejaba el empleado

OBJETIVO 2 — TRANSFERENCIA DE CONOCIMIENTO:
→ Documentar los procesos que solo el empleado conocía
→ Traspasar relaciones con clientes, proveedores y stakeholders
→ Preservar el conocimiento institucional que se va con la persona

OBJETIVO 3 — APRENDIZAJE PARA LA EMPRESA:
→ Entender las razones reales de la salida
→ Identificar factores de retención que la empresa podría mejorar
→ Salir de la relación de forma positiva: el empleado que se va es un futuro referidor, cliente o re-hire
```

---

### El timeline de offboarding: qué hacer en cada fase

**Fase 1: Las primeras 24 horas tras recibir la notificación de salida**
```
PARA RRHH:
□ Notificar internamente: manager directo + RRHH + IT (en ese orden, no al revés)
□ Revisar el contrato: período de preaviso, cláusulas de no competencia, confidencialidad
□ Confirmar fecha efectiva de fin de contrato
□ Iniciar el proceso de liquidación con el asesor laboral:
  → Liquidación de sueldo prorrateado, vacaciones pendientes, pagas extras proporcionales
  → Si hay incentivos o bonus: verificar las condiciones de devengo

PARA EL MANAGER:
□ Informar al equipo cercano (sin entrar en detalles si el empleado prefiere privacidad hasta tener plan)
□ Identificar los proyectos activos que el empleado gestiona
□ Acordar con el empleado cómo y cuándo se comunica al equipo y a los clientes
□ Planificar la distribución del trabajo o el proceso de cobertura

PARA IT/SEGURIDAD:
□ Registrar todos los accesos activos del empleado:
  → Email corporativo, Google Workspace/Microsoft 365
  → Slack, Notion, GitHub, Figma, AWS, Jira, CRM, HRIS, sistemas de producción
  → Herramientas con licencia individual (Adobe CC, etc.)
□ NO revocar accesos todavía — solo inventariarlos (la revocación se hace el último día)
```

**Fase 2: Las 2 semanas de transición**
```
TRANSFERENCIA DE CONOCIMIENTO:
□ El empleado documenta sus procesos principales (usar la plantilla de proceso runbook)
□ Reuniones de "shadow" con el sustituto o con el equipo que absorbe las tareas
□ Actualización del CRM con el estado de todos los clientes/proyectos activos
□ Lista de contactos clave con el contexto de la relación:
  Plantilla: "[Nombre cliente/proveedor] — Contacto: [nombre/email/teléfono] —
  Estado de la relación: [descripción] — Temas pendientes: [lista] — Quién asume: [nombre]"
□ Transferencia de credenciales compartidas al responsable siguiente (gestor de contraseñas)

PLAN DE COMUNICACIÓN:
□ Clientes de los que era responsable: llamada personal del manager o del nuevo responsable
□ Equipo interno: comunicado en el canal del equipo
□ LinkedIn: acuerdo sobre si se anuncia antes del último día o el mismo día
□ Stakeholders externos clave: email personalizado del manager

PLANTILLA DE COMUNICACIÓN INTERNA:
"Equipo, quería compartir que [Nombre] ha decidido embarcarse en un nuevo proyecto
profesional. Su último día con nosotros será el [fecha]. Durante estas semanas, [Nombre]
está trabajando con [sustituto/equipo] para asegurar una transición ordenada.
Queremos agradecerle públicamente todo lo que ha aportado, especialmente [logro concreto].
Os pedimos que os unáis a nosotros para desearle lo mejor en su próxima etapa.
Si tenéis preguntas, hablad con [manager] o con RRHH."
```

**Fase 3: El último día**
```
PROTOCOLO DEL ÚLTIMO DÍA:
□ Primera hora del día: reunión con IT para revocar accesos en presencia del empleado
   (más respetuoso y evita que los accesos queden activos por olvido)
□ Devolución de activos: portátil, móvil, tarjetas de acceso, llaves, tarjeta de empresa
□ Firma del recibo de liquidación y del recibo de devolución de activos
□ Certificado de empresa (para prestaciones por desempleo si aplica)
□ Firma del compromiso de confidencialidad post-contrato si es aplicable
□ Despedida del equipo: organizarla el manager, no RRHH
  → Café con el equipo / carta firmada por todos / regalo simbólico según la cultura
□ Entrevista de salida (30-45 min, separada de la parte administrativa)

REVOCACIÓN DE ACCESOS — CHECKLIST:
□ Email corporativo (redirigir o configurar respuesta automática durante X semanas)
□ Google/Microsoft Workspace — suspender cuenta, no eliminar (conservar datos 30-90 días)
□ Slack: desactivar pero conservar historial
□ GitHub/GitLab: revocar acceso pero conservar historial de commits
□ CRM (HubSpot/Salesforce): desactivar usuario, reasignar registros
□ Herramientas de diseño/desarrollo: revocar licencias
□ Accesos a sistemas de producción/cloud: MÁXIMA URGENCIA el mismo día
□ VPN y accesos remotos
□ Cuentas de redes sociales corporativas si tenía acceso
□ Password manager compartido: rotar contraseñas que el empleado conocía
```

---

### La entrevista de salida: cómo convertirla en inteligencia de retención

**Quién hace la entrevista de salida:**
```
LO IDEAL: RRHH (no el manager directo)
→ El empleado es más honesto con alguien que no es su evaluador directo
→ Si la razón de la salida tiene que ver con el manager → el empleado no lo dirá en su cara
→ Alternativa para empresas pequeñas: el CEO/fundador si tiene relación directa de confianza

TIMING: 1-3 días antes del último día (no el mismo día — está emocionalmente cargado)
DURACIÓN: 30-45 minutos
FORMATO: Conversación, no cuestionario — las mejores insights vienen de las preguntas abiertas
```

**Preguntas de la entrevista de salida:**
```
APERTURA:
"Esta conversación es confidencial. El objetivo no es que justifiques tu decisión
sino aprender qué podemos mejorar como empresa. No hay respuestas incorrectas."

SOBRE LA EXPERIENCIA:
"¿Cuáles han sido los aspectos que más has valorado de trabajar aquí?"
"¿Cuáles han sido los mayores retos o frustraciones durante tu tiempo en la empresa?"

SOBRE LA DECISIÓN:
"¿Qué fue lo que más influyó en tu decisión de buscar otra oportunidad?"
"¿Hubo algún momento o evento específico que aceleró la decisión?"

SOBRE LO QUE PODRÍAMOS MEJORAR:
"Si pudieras cambiar una cosa sobre cómo funciona el equipo, ¿qué cambiarías?"
"¿Hay alguna política, herramienta o proceso que crees que nos resta competitividad como empleador?"
"¿Sentiste que tenías el apoyo y los recursos que necesitabas para hacer bien tu trabajo?"

SOBRE EL FUTURO:
"¿Estarías abierto a seguir en contacto con nosotros profesionalmente?"
"¿Recomendarías trabajar aquí a alguien de tu red? ¿Por qué sí o por qué no?"

CIERRE:
"¿Hay algo más que quieras compartir que no te haya preguntado?"
```

**Síntesis de las entrevistas de salida:**
```
CADA TRIMESTRE, ANALIZA LAS ENTREVISTAS DE SALIDA:
→ ¿Hay patrones comunes en las razones de salida?
→ ¿Los managers tienen el mismo porcentaje de salidas voluntarias?
  Si un manager tiene el doble de bajas que la media → investigar
→ ¿Las personas de un determinado nivel o antigüedad se van más?
  Si los empleados de 2-3 años se van masivamente → hay un problema de desarrollo de carrera

REPORTE TRIMESTRAL DE OFFBOARDING AL EQUIPO DIRECTIVO:
→ Número de salidas voluntarias vs. total de empleados (turnover rate)
→ Principales razones declaradas (categorías, no nombres)
→ Tendencias vs. trimestres anteriores
→ Recomendaciones de mejora basadas en los patrones
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Gestionar el offboarding de empleados de forma que protege la empresa y la reputación empleadora',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Revenue forecast anual: cómo construir la previsión de ventas que sustenta el plan financiero',
                'description'       => 'Construye una previsión de revenue anual rigurosa que conecta los drivers del negocio con el plan financiero, distingue entre ingresos recurrentes y no recurrentes, y está estructurada con los escenarios y la sensibilidad que necesitan los inversores y la dirección para tomar decisiones.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO con experiencia construyendo forecasts financieros en empresas SaaS y de servicios B2B en etapas de crecimiento, donde la previsión de revenue no es un ejercicio de wishful thinking sino el modelo de negocio expresado en números con los supuestos explícitos que permiten al equipo directivo entender qué tiene que ser cierto para que los números se cumplan.

Contexto:
- Tipo de negocio y modelo de revenue: [SaaS con ARR / negocio de servicios / revenue transaccional / marketplace]
- Estado actual: [sin forecast formal / forecast en Excel sin estructura / quiero mejorar el modelo existente]
- Usuarios del forecast: [solo el CFO / el equipo directivo / también inversores / banco]
- Horizonte de planificación: [12 meses / 3 años]
- Principal reto: [separar ingresos seguros de los inciertos / modelar el churn / comunicar supuestos a inversores]

## Modelo de Revenue Forecast — [Empresa]

### Los principios del forecast riguroso

**Lo que separa un forecast sólido de una hoja de deseos:**
```
PRINCIPIO 1 — SUPUESTOS EXPLÍCITOS:
Un buen forecast no son solo números — son los supuestos que generan los números.
Cada línea del modelo debe responder: "¿Por qué este número y no otro?"
→ "Prevemos 50 nuevos clientes en Q2"
  Supuesto explícito: "Basado en el pipeline actual de 200 oportunidades calificadas × 25% win rate histórico"

PRINCIPIO 2 — DRIVERS DEL NEGOCIO, NO LÍNEAS DEL P&L:
El error más común: proyectar cada línea de ingresos del P&L por separado.
La forma correcta: modelar los drivers (palancas) que generan el revenue.
→ En SaaS: nuevos clientes × ACV = ARR nuevo / churn × ARR existente = ARR perdido
→ En servicios: proyectos activos × € por proyecto / mes
→ En e-commerce: visitas × tasa de conversión × ticket medio

PRINCIPIO 3 — SEPARAR REVENUE SEGURO DE REVENUE INCIERTO:
→ Revenue "committed" o "contractual": ingresos ya firmados (renovaciones, contratos multi-año)
→ Revenue "expected": ingresos con alta probabilidad pero no firmados (pipeline avanzado)
→ Revenue "upside": ingresos que podrían ocurrir si todo va bien (pipeline temprano)
El CEO y los inversores necesitan ver estas tres capas separadas.

PRINCIPIO 4 — TRES ESCENARIOS:
→ Escenario base: el más probable con los datos actuales
→ Escenario conservador: qué pasa si el 70% de los supuestos del base se cumplen
→ Escenario optimista: qué pasa si hay aceleración del mercado o del equipo
El rango entre conservador y optimista define el nivel de incertidumbre del modelo.
```

---

### Estructura del modelo de revenue por tipo de negocio

**Modelo SaaS — ARR Waterfall:**
```
ESTRUCTURA DEL ARR WATERFALL:

ARR INICIO DEL PERÍODO:           [X€]
+ ARR NUEVO:                      [Y€]  → nuevos clientes × ACV medio
+ EXPANSIÓN (upsell/cross-sell):  [Z€]  → clientes existentes que amplían
- CONTRACCIÓN:                   [-A€]  → clientes que reducen el plan
- CHURN:                         [-B€]  → clientes que cancelan
= ARR FIN DEL PERÍODO:            [X+Y+Z-A-B€]

DRIVERS DEL MODELO SaaS:
→ Nuevos clientes / mes: basado en pipeline × win rate
→ ACV medio: basado en el mix de segmentos (SMB/Mid/Enterprise)
→ Churn rate mensual: % del ARR que se pierde por cancelaciones
→ Net Revenue Retention (NRR): (ARR inicio + expansión - contracción - churn) / ARR inicio
   → NRR >100% = creces aunque no añadas ningún cliente nuevo
   → NRR <100% = cada cohorte se encoge con el tiempo → problema grave

TEMPLATE MENSUAL DEL WATERFALL:
| Concepto           | Ene | Feb | Mar | ... | Dic | Total Año |
|--------------------|-----|-----|-----|-----|-----|-----------|
| ARR inicio         |     |     |     |     |     |           |
| + Nuevos           |     |     |     |     |     |           |
| + Expansión        |     |     |     |     |     |           |
| - Contracción      |     |     |     |     |     |           |
| - Churn            |     |     |     |     |     |           |
| = ARR fin          |     |     |     |     |     |           |
| MRR reconocido     |     |     |     |     |     |           |
```

**Modelo de servicios — Capacity-based:**
```
ESTRUCTURA DEL MODELO DE SERVICIOS:

CAPACIDAD DISPONIBLE:
→ Número de consultores / diseñadores / desarrolladores × horas/mes facturable
→ Tasa de utilización objetivo: % de las horas disponibles que se facturan (benchmark: 70-80%)
→ Tarifa media / hora: media ponderada del equipo

REVENUE PROYECTADO:
Capacidad (horas) × Utilización (%) × Tarifa media = Revenue potencial

PIPELINE DE PROYECTOS:
→ Proyectos en curso (ingresos asegurados): monto × meses restantes
→ Proyectos en pipeline avanzado: importe × probabilidad de cierre
→ Proyectos en exploración: importe × probabilidad baja

EJEMPLO:
10 consultores × 160h/mes disponibles × 75% utilización × 120€/h = 144.000€/mes
+ Pipeline seguro: 3 proyectos activos = 85.000€/mes
+ Pipeline probable (80%): 50.000€ × 80% = 40.000€/mes
→ Revenue esperado mes: 144.000 + 85.000 + 40.000 = 269.000€
```

---

### Los supuestos clave del forecast: lo que hay que documentar

**Template de supuestos del modelo:**
```
SUPUESTO 1 — NUEVOS CLIENTES / TRIMESTRE:
Base: [número] | Fuente: pipeline actual × win rate histórico
Sensibilidad: +/-10 clientes = +/-[€] en el ARR
Riesgo: [si el ciclo de venta se alarga por X razón]

SUPUESTO 2 — CHURN RATE MENSUAL:
Base: [%] | Fuente: media de los últimos 12 meses
Sensibilidad: cada 1% de churn adicional = -[€] ARR en 12 meses
Riesgo: [segmento SMB tiene churn más alto que el histórico si hay problemas económicos]

SUPUESTO 3 — ACV MEDIO (precio por cliente):
Base: [€] | Fuente: distribución de deals cerrados en los últimos 6 meses
Sensibilidad: +/-10% en ACV = +/-[€] en ARR nuevo anual
Riesgo: [si el mix cambia hacia más SMB, el ACV baja]

SUPUESTO 4 — TASA DE EXPANSIÓN:
Base: [% del ARR existente que expande al año] | Fuente: cohortes históricas
Sensibilidad: cada 5% adicional de expansión = +[€] ARR sin nuevos clientes
Oportunidad: [el lanzamiento de [feature] en Q3 podría acelerar el upsell]
```

---

### Visualización para la dirección e inversores

**El one-pager del forecast:**
```
REVENUE FORECAST [AÑO] — [EMPRESA]
Actualizado: [fecha] | Versión: [número]

RESUMEN EJECUTIVO:
┌────────────────────────────────────────────────────────────┐
│                    ESCENARIO BASE       RANGO (Cons - Opt) │
│ ARR fin de año:    [€]                  [€] — [€]          │
│ Revenue reconocido:[€]                  [€] — [€]          │
│ Crecimiento YoY:   [%]                  [%] — [%]          │
│ NRR:               [%]                                     │
└────────────────────────────────────────────────────────────┘

BRIDGE ARR: [Gráfica waterfall ARR inicio → ARR fin]

LOS 3 SUPUESTOS CRÍTICOS:
1. [Supuesto más importante] → impacto si cambia: [±€]
2. [Segundo supuesto más importante] → impacto: [±€]
3. [Tercer supuesto] → impacto: [±€]

MILESTONES CLAVE DEL AÑO:
Q1: [hito de revenue o de cliente clave]
Q2: [hito]
Q3: [hito]
Q4: [hito]

WHAT NEEDS TO BE TRUE (para alcanzar el escenario base):
□ El equipo de ventas cierra X nuevos clientes al trimestre
□ El churn se mantiene por debajo del [%] mensual
□ El lanzamiento de [feature] en Q3 impulsa el upsell en Q4
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir un modelo de revenue forecast anual riguroso y comunicable a inversores',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Derecho de la competencia desleal en España: prácticas prohibidas que muchas empresas hacen sin saberlo',
                'description'       => 'Conoce las prácticas de competencia desleal más frecuentes en España y cómo la Ley 3/1991 protege a competidores y consumidores: comparación publicitaria incorrecta, imitación de prestaciones, denigración, actos de engaño y violación de secretos. Incluye ejemplos reales, las sanciones y cómo denunciar.',
                'prompt_content'    => <<<'PROMPT'
Eres una abogada especializada en derecho mercantil y competencia con experiencia asesorando a empresas que son víctimas de competencia desleal y a empresas que necesitan revisar sus prácticas comerciales para asegurarse de que cumplen la Ley 3/1991 de Competencia Desleal, que es una de las normas más infringidas del derecho empresarial español precisamente porque muchas empresas la desconocen.

Contexto:
- Tipo de empresa: [startup / PYME / empresa establecida / multinacional]
- Sector: [tech / retail / industria / servicios / otro]
- Situación actual:
  A) "Creo que un competidor está haciendo algo desleal contra mi empresa"
  B) "Quiero revisar si nuestras prácticas comerciales cumplen la LCD"
  C) "Vamos a lanzar una campaña de marketing y quiero asegurarme de que es legal"

## Competencia Desleal en España — Guía Práctica

### Los 10 actos de competencia desleal más frecuentes

**Acto 1: Actos de engaño (Art. 5 LCD)**
```
DEFINICIÓN:
Cualquier conducta que contenga información falsa o que, siendo verdadera, por su contenido
o presentación pueda inducir a error a los destinatarios y les pueda llevar a tomar una
decisión de transacción que de otro modo no hubieran tomado.

EJEMPLOS FRECUENTES:
❌ "El software de gestión más vendido de España" → sin datos que lo acrediten
❌ "Somos el único servicio 24/7 del sector" → si hay otros que también lo ofrecen
❌ Mostrar testimoniales falsos o de dudosa autenticidad
❌ Afirmaciones de descuentos sobre precios de referencia ficticios
❌ Certificaciones o premios inventados o no verificables

CÓMO EVITARLO:
→ Cualquier claim de marketing cuantificable debe tener un estudio o fuente que lo respalde
→ "El número 1" o "el mejor" solo son legales si tienes datos verificables que lo sustenten
→ Los testimoniales deben ser de clientes reales y representar experiencias reales
```

**Acto 2: Actos de denigración (Art. 9 LCD)**
```
DEFINICIÓN:
La realización o difusión de manifestaciones sobre la actividad, las prestaciones,
el establecimiento o las relaciones mercantiles de un tercero que sean aptas para
menoscabar su crédito en el mercado, salvo que sean exactas, verdaderas y pertinentes.

EJEMPLOS FRECUENTES:
❌ "No hagas como [competidor], que tardó 30 días en resolver el problema de su cliente"
   → aunque sea verdad, puede ser desleal si no es pertinente ni proporcional
❌ Publicar capturas de pantalla de reseñas negativas del competidor con fines comerciales
❌ Comunicaciones al equipo de ventas con información negativa del competidor no verificada
❌ Redes sociales donde se responde a preguntas de usuarios desacreditando a la competencia

LÍMITE LEGAL:
→ La crítica veraz, exacta y pertinente de un competidor puede ser lícita
→ "El producto de [competidor] no tiene funcionalidad X" → lícito si es verdad y verificable
→ "El producto de [competidor] es una basura que arruinará tu empresa" → desleal
```

**Acto 3: Comparación publicitaria incorrecta (Art. 10 LCD y Directiva 2006/114/CE)**
```
PARA QUE LA PUBLICIDAD COMPARATIVA SEA LEGAL:
□ No debe ser engañosa
□ Debe comparar bienes o servicios que satisfacen las mismas necesidades (mismo uso)
□ Debe comparar objetivamente características esenciales, pertinentes, verificables y representativas
□ No puede crear confusión en el mercado
□ No puede menoscabar el crédito del competidor de forma desleal
□ No puede imitar las marcas del competidor

EJEMPLOS LEGALES DE COMPARACIÓN:
✅ Comparativas de precio verificables: "Nuestro plan básico cuesta 30€ vs. 45€ de [competidor]"
   → Solo legal si los planes son comparables en prestaciones y los precios son actuales y verificables
✅ Comparativas de características técnicas: tabla de funcionalidades con fuentes verificables

EJEMPLOS ILEGALES:
❌ Usar el logo del competidor en publicidad comparativa → uso de marca ajena
❌ Comparar condiciones distintas como si fueran equivalentes (precio sin IVA vs. precio con IVA)
❌ Seleccionar solo las características donde ganas y omitir las donde pierdes
```

**Acto 4: Imitación de prestaciones (Art. 11 LCD)**
```
DEFINICIÓN:
La imitación de las prestaciones e iniciativas empresariales ajenas es libre (principio
de libre competencia), EXCEPTO cuando la imitación:
→ Crea confusión con el producto del competidor (el consumidor cree que es del mismo fabricante)
→ Aprovecha de modo parasitario la reputación o el esfuerzo ajeno
→ Es sistemática y va dirigida a impedir la consolidación de la empresa imitada

EJEMPLOS FRECUENTES:
❌ Copiar el diseño de packaging de un competidor hasta que el consumidor no distingue cuál es cuál
❌ Copiar el nombre de dominio con una ligera variación: tuempresa.com → tuempresashop.com
❌ Copiar el naming de funcionalidades o el diseño de la interfaz hasta crear confusión
❌ Anunciar un producto con la fotografía de otro producto (trade dress infringement)

LA FRONTERA LEGAL:
→ Inspirarse en el modelo de negocio del competidor → legal
→ Copiar sus prestaciones hasta crear confusión → desleal
```

**Acto 5: Violación de secretos empresariales (Art. 13 LCD + Ley 1/2019)**
```
DEFINICIÓN:
Se considera desleal la divulgación o explotación de secretos industriales o empresariales
sin la autorización del titular de los mismos, cuando se hubiere tenido acceso legítimo
con el deber, expreso o tácito, de reserva.

SITUACIONES DE RIESGO EN EMPRESAS:
❌ Un empleado que se va y lleva consigo la base de datos de clientes
❌ Un ex-trabajador que monta una empresa con los algoritmos o procesos que conoció en la anterior
❌ Un proveedor que usa información confidencial del proyecto para competir
❌ Un socio que abandona y usa el know-how compartido durante el proyecto común

PROTECCIÓN PRÁCTICA:
□ NDA (Non-Disclosure Agreement) con empleados, proveedores y socios antes de revelar información sensible
□ Política de acceso al código y a la información: principio de mínimo privilegio
□ Cláusula de no competencia en los contratos de empleados clave (legalmente limitada: máximo 2 años, debe tener compensación económica — art. 21 ET)
□ Registrar qué información se considera secreto empresarial en el reglamento interno
```

---

### Las 5 acciones más comunes en B2B que infringen la LCD

```
ACCIÓN 1 — CAPTACIÓN DE CLIENTES VALIÉNDOSE DE DATOS INTERNOS:
Un comercial que se va y usa la lista de clientes de la empresa anterior para captarles.
Fundamento: Art. 14 LCD (inducción a la infracción contractual) + Art. 13 LCD (secretos)

ACCIÓN 2 — COPIAR PROPUESTAS O PRESENTACIONES:
Un competidor que obtiene tus propuestas a través de un cliente común y basa su oferta en ellas.
Fundamento: Art. 13 LCD (secretos empresariales)

ACCIÓN 3 — USAR MARCA AJENA EN SEO/SEM:
Pujar en Google Ads por el nombre de la marca del competidor para aparecer en sus búsquedas.
Estado legal en España: zona gris — permitido si el anuncio no causa confusión y no usa la marca en el texto.

ACCIÓN 4 — FAKE REVIEWS:
Publicar reseñas falsas positivas de la propia empresa o negativas del competidor.
Fundamento: Art. 5 LCD + Directiva Omnibus (ilegal para e-commerce desde 2023)

ACCIÓN 5 — HEADHUNTING SISTEMÁTICO:
Contratar sistemáticamente al equipo de un competidor para paralizarle.
Fundamento: Art. 14 LCD si hay inducción activa a romper contratos vigentes
```

---

### Cómo denunciar una práctica de competencia desleal

**Las 3 vías de acción:**
```
VÍA 1 — ACCIÓN JUDICIAL CIVIL (la más efectiva):
→ Juzgado de lo Mercantil de la provincia del demandado
→ Acciones disponibles: cesación de la conducta, rectificación, indemnización de daños
→ Plazo de prescripción: 3 años desde que el perjudicado tuvo conocimiento de la conducta

VÍA 2 — CNMC (Comisión Nacional de Mercados y la Competencia):
→ Para conductas que afectan al mercado en general (no solo a una empresa individual)
→ Especialmente relevante en prácticas colusorias o abuso de posición dominante
→ Puede imponer multas de hasta el 10% de la facturación global

VÍA 3 — AUTOCONTROL (sistema de autorregulación publicitaria):
→ Para prácticas de publicidad desleal sin llegar a un juzgado
→ Resolución en 10-15 días hábiles, sin coste
→ Las marcas más grandes acatan las resoluciones por el impacto reputacional

EVIDENCIAS A RECOPILAR ANTES DE DENUNCIAR:
□ Capturas de pantalla con timestamp y URL de la conducta desleal
□ Testigos que puedan atestiguar sobre la conducta (clientes afectados, ex-empleados)
□ Acta notarial de la web o del anuncio si hay riesgo de que desaparezca
□ Documentos que acrediten el daño (clientes perdidos, comparativas de ventas)
□ Requerimiento previo enviado al infractor (burofax o similar) — muchas empresas cesan la conducta sin necesidad de juicio
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Identificar y evitar prácticas de competencia desleal en España bajo la Ley 3/1991',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Programa de certificación y formación de clientes: reduce el soporte y aumenta el valor percibido',
                'description'       => 'Diseña un programa de formación y certificación para clientes que reduce las solicitudes de soporte de nivel 1, aumenta la adopción del producto y convierte a los usuarios más avanzados en defensores internos dentro de las cuentas. Incluye la estructura del programa, los formatos de contenido y las métricas de éxito.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Education Manager con experiencia construyendo academias de clientes y programas de certificación en empresas SaaS B2B donde el knowledge gap entre lo que el producto puede hacer y lo que el cliente sabe hacer ha sido históricamente la mayor fuente de tickets de soporte, churn y satisfacción baja, y donde un programa de educación bien diseñado ha reducido el soporte de nivel 1 hasta un 40% y aumentado el NPS en 15-20 puntos.

Contexto:
- Tipo de producto: [SaaS B2B / plataforma de datos / ERP / otro software]
- Base de clientes: [número de cuentas y usuarios activos]
- Recursos de formación actuales: [sin documentación / documentación básica / videos en YouTube / nada estructurado]
- Principal problema: [muchos tickets de preguntas básicas / baja adopción de features avanzadas / los usuarios no ven el valor del producto / el onboarding no funciona]
- Objetivo: [reducir tickets de soporte / aumentar adopción / retener clientes / escalar el CS sin añadir headcount]

## Programa de Customer Education — [Empresa]

### Por qué la formación de clientes es estrategia, no solo soporte

**El negocio case de la educación de clientes:**
```
CÁLCULO DEL ROI DE UN PROGRAMA DE EDUCACIÓN:

COSTE ACTUAL (sin programa de educación):
→ Tickets de soporte nivel 1 (preguntas básicas que documentación resolvería): 500 tickets/mes
→ Tiempo medio de resolución: 20 minutos
→ Coste hora del equipo de soporte: 35€/h
→ Coste mensual en soporte de nivel 1: 500 × (20/60) × 35 = 5.833€/mes

COSTE DEL PROGRAMA DE EDUCACIÓN:
→ Inversión inicial en contenido: 10.000-20.000€ (tiempo interno o freelance)
→ Plataforma LMS: 200-1.000€/mes
→ Mantenimiento de contenido: 20% del tiempo de 1 persona

IMPACTO ESPERADO (basado en benchmarks de la industria):
→ Reducción de tickets nivel 1: 30-50%
→ Reducción de tickets relacionados con formación de usuarios nuevos: 40-60%
→ ROI estimado en 6-12 meses: 200-400%

MÉTRICAS ADICIONALES:
→ Clientes con usuarios certificados renuevan un 20-30% más que los no certificados (benchmark del sector)
→ Clientes con alta adopción del LMS tienen NRR 15-25% superior a la media
```

---

### Estructura del programa de formación en 3 capas

**CAPA 1 — Formación de onboarding (semanas 1-4 del cliente)**
```
OBJETIVO: El cliente alcanza el primer momento de valor lo antes posible.
AUDIENCIA: Todos los usuarios nuevos, especialmente el administrador del sistema.

FORMATO RECOMENDADO:
→ Secuencia de emails automatizados con 1 recurso por email (video de 3-5 min + checklist)
→ "Welcome series" en el LMS: 4-6 módulos de 10-15 minutos
→ Webinar de onboarding grupal semanal (1 hora, para nuevos clientes de esa semana)
   → Grabado → disponible en el LMS para quienes no pueden asistir en directo

CONTENIDO DE LA SECUENCIA DE ONBOARDING:
Semana 1: Configuración inicial — cómo preparar la cuenta para el equipo
Semana 2: Los 3 flujos más importantes del producto — los que resuelven el dolor principal
Semana 3: Funcionalidades avanzadas para el administrador
Semana 4: Integración con las herramientas que ya usan + mejores prácticas
```

**CAPA 2 — Formación continua y especializada**
```
OBJETIVO: El cliente saca el máximo partido a cada área del producto.
AUDIENCIA: Usuarios activos que quieren profundizar en un área específica.

ESTRUCTURA:
→ Módulos por rol: "Formación para el equipo de ventas" / "Formación para el administrador" / "Formación para analistas"
→ Módulos por caso de uso: "Cómo gestionar [proceso específico] con [producto]"
→ Release notes en formato formativo: cada nueva feature tiene un video de 2-3 minutos de contexto

FRECUENCIA:
→ Nuevo contenido: 2-4 módulos nuevos al mes (no esperes a tener 100 módulos antes de lanzar)
→ Webinar de funcionalidades avanzadas: 1 por mes, en formato "Power User Tip"
→ Newsletter de producto: mensual, con 1 tip avanzado y el enlace a la documentación relacionada
```

**CAPA 3 — Certificación de usuarios avanzados**
```
OBJETIVO: Identificar y reconocer a los usuarios que dominan el producto y convertirles en
defensores internos (champions) dentro de la cuenta.

ESTRUCTURA DEL PROGRAMA DE CERTIFICACIÓN:
NIVEL 1 — USUARIO CERTIFICADO:
→ Completa los módulos de onboarding + 2 módulos especializados
→ Supera el examen básico (15-20 preguntas, 70% mínimo para aprobar)
→ Recibe: badge digital para LinkedIn, certificado PDF con el logo de la empresa

NIVEL 2 — USUARIO AVANZADO:
→ Nivel 1 completado + módulos avanzados de su rol
→ Examen avanzado (25-30 preguntas, 80% mínimo)
→ Recibe: badge de nivel avanzado + acceso a la comunidad de usuarios avanzados

NIVEL 3 — PRODUCT CHAMPION:
→ Nivel 2 completado + 6 meses de actividad en la comunidad
→ Evaluación por el equipo de Customer Success
→ Recibe: acceso anticipado a betas, sesiones directas con el CPO, visibilidad como caso de éxito

POR QUÉ LA CERTIFICACIÓN REDUCE EL CHURN:
→ Los usuarios certificados tienen mayor adopción → mayor valor percibido
→ El champion es tu aliado interno en la cuenta para la renovación
→ La inversión del cliente en la certificación activa el sunk cost effect → más comprometido con el producto
```

---

### La plataforma LMS: opciones por presupuesto y necesidad

| Plataforma | Tipo | Mejor para | Precio aproximado |
|-----------|------|-----------|------------------|
| Notion / Confluence | Wiki estructurada | Documentación básica + muy pequeño | Gratis / 10€ usuario/mes |
| Loom | Video asíncrono | Tutoriales rápidos + soporte | Desde 12€/mes |
| Teachable / Thinkific | LMS sencillo | <500 usuarios, fácil de configurar | 39-149€/mes |
| LearnUpon / TalentLMS | LMS para empresas | 100-5.000 usuarios, SCORM | 299-1.000€/mes |
| Docebo / Cornerstone | Enterprise LMS | >5.000 usuarios, integración CRM | 1.500€+/mes |
| Gainsight Customer Education | Customer Education específico | Integración con CS tools | Consultar precio |

**Criterios de selección:**
```
→ Integración con tu CRM: ¿puedes saber qué cursos ha completado cada cuenta?
→ Certificados automáticos: ¿emite el certificado al pasar el examen?
→ Analytics por usuario y por empresa: ¿puedes ver qué cuentas no están formando a su equipo?
→ White-labeling: ¿el LMS puede tener tu marca, no la del proveedor?
→ Precio por seat vs. precio fijo: para bases de clientes grandes, precio fijo es mejor
```

---

### KPIs del programa de customer education

```
ADOPCIÓN DEL PROGRAMA:
→ % de cuentas con al menos 1 usuario activo en el LMS (objetivo: >50% en 6 meses)
→ % de usuarios nuevos que completan el onboarding en el LMS (objetivo: >60%)
→ Número de certificaciones emitidas / mes (tendencia creciente)

IMPACTO EN SOPORTE:
→ Tickets de soporte de nivel 1 antes y después del lanzamiento del programa
→ Tiempo de resolución del ticket (los usuarios formados resuelven más por sí mismos)
→ % de tickets que incluyen "no sé cómo hacer X" (deben reducirse)

IMPACTO EN NEGOCIO:
→ NRR de cuentas con usuarios certificados vs. sin certificar
→ Churn rate de cuentas con alta adopción del LMS vs. baja adopción
→ NPS de usuarios con certificación vs. sin certificación
→ Tasa de expansión de cuentas con Product Champions vs. sin ellos
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear un programa de formación de clientes que reduce soporte y aumenta la retención',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Trabajar con clientes internacionales: cómo captar clientes extranjeros, cobrar y gestionar la fiscalidad',
                'description'       => 'Aprende a captar y gestionar clientes internacionales como freelance: dónde encontrarlos, cómo presentarte en mercados extranjeros, cómo cobrar en otras divisas y cómo gestionar la fiscalidad para no tener sorpresas con Hacienda ni con la ley del país del cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor especializado en negocios internacionales para freelancers y autónomos, con experiencia asesorando a profesionales españoles que trabajan con clientes en EEUU, Reino Unido, Europa occidental y Latinoamérica, donde la barrera de idioma, los medios de pago, el contrato adecuado y las obligaciones fiscales son los 4 obstáculos que la mayoría de freelancers internacionales no han resuelto correctamente.

Contexto:
- Tipo de servicio: [diseño / desarrollo / marketing / consultoría / redacción / traducción / otro]
- Mercados internacionales objetivo: [EEUU / UK / Europa / Latinoamérica / Oriente Medio]
- Estado actual: [sin clientes internacionales / tengo 1-2 clientes esporádicos / quiero escalar / tengo dudas fiscales]
- Principal obstáculo: [idioma / cómo encontrar clientes / cómo cobrar / fiscalidad / contratos]

## Trabajar con Clientes Internacionales — [Tu perfil]

### Por qué los clientes internacionales pagan más

**El arbitraje geográfico del trabajo digital:**
```
EL CONTEXTO:
→ Un diseñador UX senior en Madrid cobra 60-90€/hora → mercado saturado, mucha competencia española
→ Un diseñador UX en el mercado de EEUU cobran 100-200$/hora → el mismo trabajo, 2-3x más
→ El cliente americano paga más porque esa es la tarifa de referencia de su mercado
→ El diseñador español tiene un coste de vida 40% más bajo → beneficio neto superior

EL ENGLISH TAX (prima por el idioma):
→ Los clientes de EEUU, UK y Australia pagan más que los europeos
→ La demanda de profesionales hispanohablantes en EEUU y UK es alta y creciente
→ Hablar inglés B2+ te abre un mercado 5-10x más grande con presupuestos 2-3x superiores

EL MERCADO LATAM:
→ Algunos países (México, Colombia, Chile, Perú) tienen empresas medianas-grandes con presupuesto similar al europeo
→ La moneda puede ser un riesgo (depreciación del peso) → cobrar en USD incluso con clientes latinoamericanos
→ La proximidad cultural y el idioma son una ventaja competitiva vs. los anglosajones
```

---

### Cómo encontrar clientes internacionales

**Canal 1: Plataformas de trabajo internacional**
```
UPWORK (el mayor marketplace de freelancers anglosajón):
→ Para servicios con alta demanda: desarrollo, diseño, redacción en inglés, marketing digital
→ La clave del éxito en Upwork: especialización + propuesta personalizada (no template genérico)
→ Las primeras 3-5 reseñas son lo más difícil — empieza con proyectos de tarifa un 20% más baja
  para construir el historial, luego súbela progresivamente
→ El Job Success Score (JSS) > 90% es el umbral para conseguir clientes de calidad
→ Tarifa de Upwork: 10-20% sobre tus cobros

TOPTAL / ANDELA (marketplaces premium, alta selección):
→ Solo para los mejores del mercado en desarrollo y diseño
→ Proceso de selección largo y riguroso → si lo pasas, accedes a clientes de primer nivel
→ Tarifas: 100-200$/h para desarrolladores senior

CONTRA F (para diseñadores de marca y marketing):
→ Permite proyectos de branding y diseño para clientes globales
→ Más orientado a proyectos creativos de alto valor

TOPTAL / 99DESIGNS / DESIGNHILL (diseño):
→ Concursos vs. proyectos directos — los proyectos directos son más rentables a largo plazo
```

**Canal 2: LinkedIn internacional — el canal propio más escalable**
```
PREPARACIÓN DEL PERFIL EN INGLÉS:
→ Headline: "[Tu especialización] para [tipo de empresa] | Freelance [servicio]"
   Ejemplo: "UX Designer for SaaS B2B Products | Freelance | Based in Spain, Remote Worldwide"
→ About: 3 párrafos en inglés — quién eres, a quién ayudas, qué resultado consigues
→ Featured: tus mejores proyectos internacionales (aunque sean pocos)
→ Skills y endorsements en inglés

ESTRATEGIA DE CONTENIDO EN INGLÉS:
→ 2-3 posts por semana en inglés sobre tu área de especialización
→ Comenta en posts de referentes del sector anglosajón (visibilidad sin crear contenido desde cero)
→ Los posts sobre tus proyectos o aprendizajes en inglés llegan a audiencias globales

OUTREACH EN LINKEDIN (cold outreach):
→ Mensaje de conexión: personalizado, menciona algo específico de su empresa o contenido
→ Mensaje de seguimiento (48h después de aceptar): "Sigo tu trabajo en [área]. Trabajo con
  [tipo de empresa] en [tu servicio]. ¿Tienes 15 minutos para una llamada?"
→ Tasa de respuesta esperada: 5-15% si está bien segmentado
```

**Canal 3: Comunidades especializadas en inglés**
```
→ Indie Hackers, Hacker News (Show HN): para freelancers de producto y desarrollo
→ Designer Hangout, Dribbble (jobs): para diseñadores
→ Product Hunt: para lanzar proyectos y hacer networking con fundadores
→ Reddit (r/forhire, r/freelance): publicar servicios con muestra de trabajo
→ Slack communities del sector: los grupos de Product Hunt, UX Collective, etc.
```

---

### Cómo cobrar en otras divisas: las opciones

**Opción 1: Wise (antes Transferwise) — el estándar para freelancers internacionales**
```
CÓMO FUNCIONA:
→ Abre una cuenta de Wise → obtienes un número de cuenta bancaria en USD, GBP, EUR, etc.
→ Tu cliente paga a esa cuenta como si fuera una transferencia bancaria local (sin coste para él)
→ Wise convierte a EUR al tipo de cambio real (sin margen oculto)
→ Coste: ~0.5-1.5% de comisión de conversión (vs. 3-5% en bancos tradicionales)

PARA QUÉ ES IDEAL:
→ Clientes en EEUU, UK, Australia, Europa
→ Proyectos de facturación recurrente (varios pagos al mes o mes a mes)
→ Facturas de 500€ o más (para facturas pequeñas, PayPal puede ser más sencillo)
```

**Opción 2: Stripe — para cobros con tarjeta**
```
→ Crea un Payment Link o una factura con Stripe → el cliente paga con tarjeta
→ Ideal para clientes que prefieren pagar con tarjeta (frecuente en EEUU)
→ Coste: 2.9% + 0.30$ por transacción
→ Transferencia a tu cuenta española: 2-7 días hábiles
```

**Opción 3: PayPal — para montos pequeños y mercados latinoamericanos**
```
→ El estándar en Latinoamérica para pagos internacionales
→ Comisión: 4.4% + tarifa fija por divisa → más caro que Wise pero más conocido
→ Para EEUU y UK: Wise siempre mejor en coste
→ Para Latinoamérica: PayPal o transferencia directa si el cliente tiene cuenta
```

---

### Fiscalidad para freelancers con clientes internacionales

**Las reglas básicas que debes conocer:**
```
REGLA 1 — IVA EN SERVICIOS A EMPRESAS DE LA UE:
→ Si tu cliente es una empresa con NIF europeo: factura SIN IVA (operación intracomunitaria)
→ El cliente incluirá el IVA mediante el mecanismo de inversión del sujeto pasivo
→ En tu factura: indica "Inversión del sujeto pasivo — Art. 84.1.2º LIVA"
→ Debes declarar estas ventas en el modelo 349 (resumen operaciones intracomunitarias)

REGLA 2 — IVA EN SERVICIOS A EMPRESAS FUERA DE LA UE (EEUU, UK post-Brexit, etc.):
→ Factura SIN IVA (operación no sujeta a IVA español)
→ No hay modelo 349 — solo lo declaras en el modelo 303 en la casilla correspondiente
→ En tu factura: indica "No sujeto a IVA — Art. 69 LIVA (servicios a empresas fuera de la UE)"

REGLA 3 — IVA A PARTICULARES EXTRANJEROS:
→ Si tu cliente es un particular (no empresa), el IVA se aplica donde vive el cliente
→ Esto puede activar obligaciones de registro de IVA en el país del cliente
→ Solución si tienes pocos clientes particulares extranjeros: OSS (One Stop Shop) de la Agencia Tributaria

REGLA 4 — RETENCIONES EN ORIGEN (WITHHOLDING TAX):
→ Algunos países (EEUU, México, Brasil, Chile) aplican retención en origen sobre los pagos a no residentes
→ EEUU: los clientes americanos pueden aplicar 30% de withholding tax
  → Solución: solicita el formulario W-8BEN que acredita tu residencia en España y activa el convenio de doble imposición (tipo reducido o cero)
→ México: 25% de retención → solicita al cliente que aplique el CDI España-México (tipo reducido)
→ IMPORTANTE: el dinero retenido en origen se descuenta del IRPF español mediante crédito fiscal

REGLA 5 — DECLARAR TODO EN ESPAÑA (principio de renta mundial):
→ Como residente fiscal en España, declares TODOS tus ingresos mundiales, independientemente de dónde se generen
→ Los ingresos de clientes extranjeros van al IRPF exactamente igual que los nacionales
→ Los impuestos pagados en el extranjero (withholding) pueden deducirse en la declaración española
```

---

### El contrato con clientes internacionales

**Cláusulas mínimas del contrato en inglés:**
```
ELEMENTOS OBLIGATORIOS:
1. Partes del contrato (con datos de identificación completos)
2. Descripción del servicio y del alcance (scope of work)
3. Precio y método de pago (moneda, plataforma, plazos)
4. Propiedad intelectual (IP): ¿cuándo transfiere la PI al cliente? → Solo después del pago completo
5. Confidencialidad (NDA clause)
6. Limitación de responsabilidad
7. Ley aplicable y jurisdicción:
   → Para clientes UE: puedes poner ley española, jurisdicción española
   → Para clientes EEUU: negociar — intenta mantener la jurisdicción española si puedes
   → Si el cliente insiste en EEUU: ley de un estado neutral como Delaware

HERRAMIENTAS PARA CONTRATOS EN INGLÉS:
→ Bonsai (bonsaipro.com): contratos + propuestas + facturación para freelancers
→ Hello Sign / DocuSign: firma digital reconocida internacionalmente
→ Freelancers Union (contract creator): generador de contratos gratuito en inglés
→ Con abogado: solo para contratos de >5.000€ o proyectos de larga duración
```
PROMPT
,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Captar clientes internacionales, cobrar en divisa extranjera y gestionar la fiscalidad correctamente',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
        ];

        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");
                continue;
            }
            Skill::create(array_merge($data, [
                'user_id'     => $admin->id,
                'slug'        => $slug,
                'status'      => 'published',
                'version'     => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
