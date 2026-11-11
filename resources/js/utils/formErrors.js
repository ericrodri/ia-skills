import { nextTick } from 'vue'

// Nombres legibles de los campos del formulario de skills, para el aviso
// junto al botón de enviar.
const LABELS = {
    profession_id: 'Profesión',
    resource_type: 'Tipo',
    tool_name: 'Herramienta',
    difficulty: 'Dificultad',
    title: 'Título',
    description: 'Descripción',
    prompt_content: 'Prompt',
    estimated_minutes: 'Tiempo estimado',
    use_case: 'Caso de uso',
    changelog: 'Qué ha cambiado',
    visibility: 'Visibilidad',
}

export function errorLabels(errors) {
    return Object.keys(errors ?? {}).map((key) => LABELS[key] ?? key)
}

// Tras un error de validación, lleva al primer campo marcado: antes el aviso
// quedaba fuera de pantalla y parecía que el botón no hacía nada.
export function scrollToFirstError() {
    nextTick(() => {
        document.querySelector('[data-field-error]')?.scrollIntoView({ behavior: 'smooth', block: 'center' })
    })
}
