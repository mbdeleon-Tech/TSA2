param(
    [string]$SourceUrl = 'http://127.0.0.1:8080',
    [string]$RepositoryName = 'IT0049-Technical-Fomative-Assessment-1-Module-1'
)

$ErrorActionPreference = 'Stop'
$projectRoot = Split-Path -Parent $PSScriptRoot
$outputRoot = Join-Path $projectRoot 'docs'
$publicBase = "https://mbdeleon-Tech.github.io/$RepositoryName"
$routes = @(
    @{ Path = ''; Output = 'index.html' },
    @{ Path = 'about'; Output = 'about/index.html' },
    @{ Path = 'customers'; Output = 'customers/index.html' },
    @{ Path = 'users'; Output = 'users/index.html' }
)

New-Item -ItemType Directory -Force -Path $outputRoot | Out-Null
Copy-Item -LiteralPath (Join-Path $projectRoot 'public/assets') -Destination $outputRoot -Recurse -Force
Copy-Item -LiteralPath (Join-Path $projectRoot 'public/screenshots') -Destination $outputRoot -Recurse -Force

foreach ($route in $routes) {
    $source = if ($route.Path) { "$SourceUrl/$($route.Path)" } else { "$SourceUrl/" }
    $destination = Join-Path $outputRoot $route.Output
    $destinationDirectory = Split-Path -Parent $destination
    New-Item -ItemType Directory -Force -Path $destinationDirectory | Out-Null

    $html = (Invoke-WebRequest -Uri $source -UseBasicParsing).Content
    $html = $html.Replace('http://localhost:8080', $publicBase)
    $html = $html.Replace('http://127.0.0.1:8080', $publicBase)
    [System.IO.File]::WriteAllText($destination, $html, [System.Text.UTF8Encoding]::new($false))
}

Set-Content -LiteralPath (Join-Path $outputRoot '.nojekyll') -Value '' -NoNewline
Write-Host "Static site exported to $outputRoot"
