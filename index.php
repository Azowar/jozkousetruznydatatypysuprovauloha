<?phpfunction testFunction(int $intValue, float $floatValue, string $stringValue, bool $boolValue)
{
    return [
        "intValue" => $intValue,
        "floatValue" => $floatValue,
        "stringValue" => $stringValue,
        "boolValue" => $boolValue    ];
}
$testCases = [
    [1, 1.0, "1", true],
    [2.5, 2.5, "2.5", 0],
    ["a", "a", "a", "a"],
    [true, true, true, true],
    [false, false, false, false]
];
$results = [];
foreach ($testCases as $testCase) {
    list($intValue, $floatValue, $stringValue, $boolValue) = $testCase;
    $results[] = testFunction($intValue, $floatValue, $stringValue, $boolValue);
}
print_r($results);
