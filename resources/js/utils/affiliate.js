// Marca un enlace de afiliado como pulsado por una persona justo antes de
// seguirlo (también con clic central, Ctrl+clic o Intro). El servidor solo
// cuenta los clics que llevan la marca: los robots siguen el href sin ella.
// Mismo nombre que App\Support\Affiliates::PRESSED.
export function markPressed(event) {
    const link = event.currentTarget
    const url = new URL(link.href, window.location.href)
    if (url.searchParams.get('pulsado') !== '1') {
        url.searchParams.set('pulsado', '1')
        link.href = url.toString()
    }
}
