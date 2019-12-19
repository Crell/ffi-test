
#define FFI_SCOPE "POINTS"
#define FFI_LIB "./points.o"

struct point {
    int     x;
    int     y;
};

extern double distance(struct point first, struct point second);
