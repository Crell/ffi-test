#include <cstdarg>
#include <cstdint>
#include <cstdlib>

struct Point {
  uint8_t x;
  uint8_t y;
};

extern "C" {

double compute_distance(Point p1, Point p2);

} // extern "C"
